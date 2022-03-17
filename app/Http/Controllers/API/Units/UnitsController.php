<?php

namespace App\Http\Controllers\API\Units;

use App\Models\Unit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Units\UnitsResource;

class UnitsController extends Controller
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
        $data =$search == 'false'?Unit::orderBy('id', 'desc')->paginate($dataSorting):Unit::where(function($query) use($search){
            $query->orWhere('unit_name', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->orWhere('status', 'LIKE', "%{$search}%");
        })->orderBy('id', 'desc')->paginate($dataSorting);
        // $categories   = Category::paginate(5);
        return UnitsResource::collection($data);
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

            'unit_name'  => 'required',
            'status' => 'required',    
        ]);
        $data = $request->all();
        if($validatedData){

            Unit::insert($data);

            return response()->json([
                'status'  => 'success',
                'message' => 'Unit has been created!',
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
        $unit = Unit::find($id);
        return new UnitsResource($unit);
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
        Unit::find($id)->update([
            'unit_name' => $request->unit_name,
            'description' => $request->description,
            'status' => $request->status,
            
        ]); 
       
           return response()->json([
                'status'  => 'success',
                'message' => 'Unit has been updated!',
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
        $delete = Unit::find($id)->delete();
        if($delete){
            return response()->json([
                'status'  => 'danger',
                'message' => 'Unit has been deleted!',
                'icon'    => 'times',
            ]);   
        }
    }
}
