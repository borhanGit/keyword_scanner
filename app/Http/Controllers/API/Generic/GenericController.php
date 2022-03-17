<?php

namespace App\Http\Controllers\API\Generic;

use App\Models\Generic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Generic\GenericResource;

class GenericController extends Controller
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
        $data =$search == 'false'?Generic::orderBy('id', 'desc')->paginate($dataSorting):Generic::where(function($query) use($search){
            $query->orWhere('generic_name', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->orWhere('status', 'LIKE', "%{$search}%");
        })->orderBy('id', 'desc')->paginate($dataSorting);
        // $categories   = Category::paginate(5);
        return GenericResource::collection($data);
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

            'generic_name'  => 'required',
            'description'  => 'required',
            'status' => 'required',    
        ]);
        $data = $request->all();
        if($validatedData){

            Generic::insert($data);

            return response()->json([
                'status'  => 'success',
                'message' => 'Generic has been created!',
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
        $generic = Generic::find($id);
        return new GenericResource($generic);
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
        Generic::find($id)->update([
            'generic_name' => $request->generic_name,
            'description' => $request->description,
            'status' => $request->status,
            
        ]); 
       
           return response()->json([
                'status'  => 'success',
                'message' => 'Generic has been updated!',
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
        $delete = Generic::find($id)->delete();
        if($delete){
            return response()->json([
                'status'  => 'danger',
                'message' => 'Generic has been deleted!',
                'icon'    => 'times',
            ]);   
        }
    }
}
