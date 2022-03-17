<?php

namespace App\Http\Controllers\API\Category;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Category\SubCategoryResource;

class SubCategoryController extends Controller
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
        $data =$search == 'false'?SubCategory::orderBy('id', 'desc')->paginate($dataSorting):SubCategory::where(function($query) use($search){
            $query->orWhere('sub_category_name', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->orWhere('status', 'LIKE', "%{$search}%");
        })->orderBy('id', 'desc')->paginate($dataSorting);
        // $subCategories   = SubCategory::paginate(5);
        $categories = Category::where('status',1)->get();
       
        return SubCategoryResource::collection($data)->additional([
            'categories' => $categories,
            
          

            ]);
    }

    public function categoryWiseSubcategory(Request $request)
    {
       
         $subcategories = SubCategory::where('category_id', $request->name)->get();

       return response()->json(['subcategories' => $subcategories ]);
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

            'category_id'  => 'required',
            'sub_category_name'  => 'required',
            'description'  => 'required',
            'status' => 'required',    
        ]);
        $data = $request->all();
        if($validatedData){

            SubCategory::insert($data);

            return response()->json([
                'status'  => 'success',
                'message' => 'Sub Category has been created!',
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
        $subCategories = SubCategory::find($id);
        return new SubCategoryResource($subCategories);
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
        SubCategory::find($id)->update([
            'category_id' => $request->category_id,
            'sub_category_name' => $request->sub_category_name,
            'description' => $request->description,
            'status' => $request->status,
            
        ]); 
       
           return response()->json([
                'status'  => 'success',
                'message' => 'Sub Category has been updated!',
                'icon'    => 'check',
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = SubCategory::find($id)->delete();
        if($delete){
            return response()->json([
                'status'  => 'danger',
                'message' => 'Sub Category has been deleted!',
                'icon'    => 'times',
            ]);   
        }
    }
}
