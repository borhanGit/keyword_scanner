<?php

namespace App\Http\Controllers\API\AdminPanel;

use Auth;
use Helper;
use Illuminate\Support\Str;
use App\Models\AdminProfile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Admin\AdminRequest;
use App\Http\Resources\Admin\AdminResource;

class AdminController extends Controller
{
    
    public function __construct(){

        $this->middleware('auth:sanctum');   
        
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        $search = $request->search;
        $dataSorting = $request->sorting == 'false'?10:$request->sorting;
        // if($request->search != 'undefined'){
            $data =$search == 'false'?AdminProfile::orderBy('id', 'desc')->paginate($dataSorting):AdminProfile::where(function($query) use($search){
            $query->orWhere('name', 'LIKE', "%{$search}%")
            ->orWhere('user_id', 'LIKE', "%{$search}%")
            ->orWhere('email', 'LIKE', "%{$search}%");
        })->orderBy('id', 'desc')->paginate($dataSorting);

        // } else {

        //     $data = AdminProfile::orderBy('id', 'desc')->paginate(10);

        // }
        

        return  AdminResource::collection($data)->additional([
                'user_id' => Helper::userIdGenerator('ADMIN')
            ]);
         

    }
    // for searching data
    public function searchAdminData(Request $request)
    {
        $data = AdminProfile::where('name','like',"%{$request->search}%")->orderBy('id','desc')->paginate(15);
      
        return AdminResource::collection($data);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminRequest $request)
    {
        // return $request->all();
        // return public_path();
        $validated = $request->validated();

        $data                   = $request->all();
        $data['role']           = 'ADMIN';
        $data['remember_token'] = Str::random(10);

        if($validated){
            
            $user = AdminProfile::insert($data);
            return response()->json([
                'status'  => 'success',
                'message' => 'Admin user has been created!',
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
        $data = AdminProfile::find($id);
        return new AdminResource($data);
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
            
            $user = AdminProfile::find($id)->update($request->all());
            
       
            return response()->json([
                'status'  => 'info',
                'message' => 'Admin user has been updated!',
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
        $user = AdminProfile::find($id)->delete();
        if($user){
            return response()->json([
                'status'  => 'danger',
                'message' => 'Admin user has been deleted!',
                'icon'    => 'times',
            ]);   
        }

    }
}
