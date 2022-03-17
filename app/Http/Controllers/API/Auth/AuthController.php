<?php

namespace App\Http\Controllers\API\Auth;

use Auth;
use App\Models\SmProfile;
use App\Models\DsmProfile;
use App\Models\PsoProfile;
use App\Models\RsmProfile;
use App\Models\AdminProfile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\Sm\SmResource;
use App\Http\Resources\Dsm\DsmResource;
use App\Http\Resources\Pso\PsoResource;
use App\Http\Resources\Rsm\RsmResource;
use App\Http\Resources\Admin\AdminResource;

class AuthController extends Controller
{
    public function register(Request $request)
    {
          
         $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed'

        ]);

        $user           = new AdminProfile;
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return response()->json([
            'status' => 'success',
            'message'=> 'Registration Successful!'
        ]);
    }

    public function signIn(Request $request)
    {
        // return $request->all(); 
        $data = $request->validate([
            'user_id' => 'required',
            'password' => 'required'
            ]);
    
        $admin = AdminProfile::where('user_id', $request->user_id)->where('password', $request->password)->exists();
       

        if($admin){
            $data = AdminProfile::where('user_id', $request->user_id)->first();   
            $user = new AdminResource($data);
        }  else {
            return response([
                'message' => ['These credentials do not match our records.']
            ], 404);
        }
       

        $token = $user->createToken('vision')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function logout()
    {
        Auth::signout();
        return response()->json([
            'status' => 200,
            'message' => 'Logout Successfully!'
        ]);
    }
}
