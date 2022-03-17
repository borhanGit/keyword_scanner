<?php

namespace App\Http\Controllers\API\Category;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Category\CategoryResource;

class CategoryController extends Controller
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
        $data =$search == 'false'?Category::orderBy('id', 'desc')->paginate($dataSorting):Category::where(function($query) use($search){
            $query->orWhere('category_name', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->orWhere('status', 'LIKE', "%{$search}%");
        })->orderBy('id', 'desc')->paginate($dataSorting);
        // $categories   = Category::paginate(5);
        return CategoryResource::collection($data);
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

            'category_name'  => 'required',
            'description'  => 'required',
            'status' => 'required',    
        ]);
        $data = $request->all();
        if($validatedData){

            Category::insert($data);

            return response()->json([
                'status'  => 'success',
                'message' => 'Category has been created!',
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
        $categories = Category::find($id);
        return new CategoryResource($categories);
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
        Category::find($id)->update([
            'category_name' => $request->category_name,
            'description' => $request->description,
            'status' => $request->status,
            
        ]); 
       
           return response()->json([
                'status'  => 'success',
                'message' => 'Category has been updated!',
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
        $delete = Category::find($id)->delete();
        if($delete){
            return response()->json([
                'status'  => 'danger',
                'message' => 'Category has been deleted!',
                'icon'    => 'times',
            ]);   
        }
    }
}
