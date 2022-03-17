<?php

namespace App\Http\Controllers\API\Products;

use Helper;
use App\Models\Unit;
use App\Models\Generic;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Manufacturer;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Products\ProductResource;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $dataSorting = $request->sorting == 'false'?10:$request->sorting;
        $data =$search == 'false'?Product::orderBy('id', 'desc')->paginate($dataSorting):Product::where(function($query) use($search){
            $query->orWhere('product_name', 'LIKE', "%{$search}%")
            ->orWhere('product_model', 'LIKE', "%{$search}%")
            ->orWhere('regular_price', 'LIKE', "%{$search}%")
            ->orWhere('sale_price', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->orWhere('status', 'LIKE', "%{$search}%");
        })->orderBy('id', 'desc')->paginate($dataSorting);
        // $subCategories   = SubCategory::paginate(5);
        $categories   = Category::where('status',1)->get();
        $subCategory  = SubCategory::where('status',1)->get();
        $manufacturer = Manufacturer::where('status',1)->get();
        $generic      = Generic::where('status',1)->get();
        $unit         = Unit::where('status',1)->get();
       
        return ProductResource::collection($data)->additional([
            'categories'   => $categories,
            'subCategory'  => $subCategory,
            'manufacturer' => $manufacturer,
            'generic'      => $generic,
            'unit'         => $unit
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData    =  $request->validate([
            'product_name'  => 'required',
            'product_model'  => 'required',
            'regular_price'  => 'required',
            'sale_price'  => 'required',
            'weight'  => 'required',
            'status' => 'required',    
            
        ]);
    
        $fileName = Helper::imgProcess($request,'product_image','', '', 'images/products', 'store', ProductImage::class);  

       $data = $request->except(['product_image']);
        
        // $data['product_image'] = $fileName;
        if($validatedData){
           $products = Product::create($data);

           foreach ($fileName as $key => $file) {
            $fileName[$key]['product_id'] =   $products->id;
         }

         ProductImage::insert($fileName);
           
             
                return response()->json([
                    'status'  => 'success',
                    'message' => 'Product has been created!',
                    'icon'    => 'check',
                ]);   
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Product::find($id);
        return new ProductResource($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $fileName = Helper::imgProcess($request,'product_image','', '', 'images/products', 'update', ProductImage::class); 
        $data = $request->all(); 

        if($request->hasFile('product_image')){

            $oldImage = ProductImage::where('product_id', $id)->get();

            foreach ($oldImage as $key => $imageItem) {
                
                if(!empty($imageItem)){

                    unlink('images/products/'.$imageItem->product_image);
                    ProductImage::find($imageItem->id)->delete();

                }

            }

            foreach ($fileName as $key => $file) {

                $fileName[$key]['product_id'] =   $id;

            }
            
            ProductImage::insert($fileName);  
        }

        $data = Product::find($id)->update($data);
        if($data){
            // ProductImage::where('product_id',$id)->update([
            //     'product_id'=> $id,
            //     'product_image'=> $fileName,
            // ]);
            return response()->json([
                'status'  => 'success',
                'message' => 'Product has been updated!',
                'icon'    => 'check',
            ]); 
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        if($request->optional_id == 'undefined'){
            
            $delete = Product::find($id)->delete();
            $message = 'Product has been deleted!';
            $images = ProductImage::where('product_id', $id)->get();

            foreach ($images as $key => $image) {

                if(!empty($image)){
                    
                    $path = 'images/products/'.$image->product_image;
                    unlink($path);

                    $delete = ProductImage::find($image->id)->delete();  
                }
                

            }

        } else {

            $message = 'Product Image has been deleted';
            $image = ProductImage::find($request->optional_id)->product_image;

            $path = 'images/products/'.$image;
           
            unlink($path);
            $delete = ProductImage::where('product_id', $id)->where('id', $request->optional_id)->delete();
        }


        // $product = Product::find($id);
          
        // $product->productImage()->delete();
        
        // $product->delete();
        if($delete){
            return response()->json([
                'status'  => 'danger',
                'message' => $message,
                'icon'    => 'times',
            ]);   
        }
    }
}
