<?php

namespace App\Http\Controllers\API\Manufacturer;

use Helper;
use App\Models\Manufacturer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Manufacturer\ManufacturerResource;


class ManufacturerController extends Controller
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
        $data =$search == 'false'?Manufacturer::orderBy('id', 'desc')->paginate($dataSorting):Manufacturer::where(function($query) use($search){
            $query->orWhere('manufacturer_name', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->orWhere('status', 'LIKE', "%{$search}%");
        })->orderBy('id', 'desc')->paginate($dataSorting);
        // $manufacturer   = Manufacturer::paginate(5);
        return ManufacturerResource::collection($data);
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
            'manufacturer_name'  => 'required',
            'description'  => 'required',
            'status' => 'required',    
            
        ]);

        $fileName = Helper::imgProcess($request,'image_name',$request->name, '', 'images/manufacturer', 'store', Manufacturer::class);  

        $data = $request->all();
        $data['image_name'] = $fileName;
        if($validatedData){
            Manufacturer::insert($data);
    
                return response()->json([
                    'status'  => 'success',
                    'message' => 'Manufacturer has been created!',
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
        $data = Manufacturer::find($id);
        return new ManufacturerResource($data);
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
        $fileName = Helper::imgProcess($request,'image_name',$request->name, $id, 'images/manufacturer', 'update', Manufacturer::class); 
        $data = $request->all(); 
        $data['image_name'] = $fileName;
        $data = Manufacturer::find($id)->update($data);
        if($data){
            return response()->json([
                'status'  => 'success',
                'message' => 'Manufacturer has been updated!',
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
    public function destroy($id)
    {
        $delete = Manufacturer::find($id)->delete();
        if($delete){
            return response()->json([
                'status'  => 'danger',
                'message' => 'Manufacturer has been deleted!',
                'icon'    => 'times',
            ]);   
        }
    }
}
