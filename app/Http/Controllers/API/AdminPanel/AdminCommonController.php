<?php

namespace App\Http\Controllers\API\AdminPanel;

use Carbon\Carbon;
use App\Models\RxData;
use App\Models\Product;
use App\Models\Category;
use App\Models\SmProfile;
use App\Models\DsmProfile;
use App\Models\PsoProfile;
use App\Models\RsmProfile;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class AdminCommonController extends Controller
{
    public function smWiseRsm(Request $request)
    {
        $rsm = RsmProfile::where('sm_ffc', $request->name)->get();
        return response()->json($rsm);
    }
    public function rsmWiseDsm(Request $request)
    {
        $dsm = DsmProfile::where('rsm_ffc', $request->name)->get();
        return response()->json($dsm);
    }
    public function rsmWiseSm(Request $request)
    {
        $sm = RsmProfile::select('sm')->where('name', $request->name)->get();
        $dsm = DsmProfile::where('rsm', $request->name)->get();
        return Response::json(array(
            'sm' => $sm,
            'dsm' => $dsm,
         ));
        // return response()->json($sm);
    }
    public function dsmWisePso(Request $request)
    {
        $pso = PsoProfile::where('dsm_ffc', $request->name)->get();
        return response()->json($pso);
    }
    public function dsmWiseSm(Request $request)
    {
        $sm = DsmProfile::select('sm')->where('name', $request->name)->get();
        $rsm = DsmProfile::select('rsm')->where('name', $request->name)->get();
        $pso = PsoProfile::where('dsm', $request->name)->get();
        return Response::json(array(
            'sm' => $sm,
            'rsm' => $rsm,
            'pso'=> $pso
         ));
    }
    public function psoWiseAll(Request $request)
    {
       
        $pso = PsoProfile::where('name', $request->name)->get();
        return response()->json($pso);
    }

    public function totalPanelUser()
    {
         
        $totalCategory    = Category::count();
        $totalSubCategory = SubCategory::count();
        $totalProduct     = Product::count();
        

        $data                  =  [
           
            'totalCategory'    => $totalCategory,
            'totalSubCategory' => $totalSubCategory,
            'totalProduct'     => $totalProduct,
           
        ];

        return response()->json($data);
    }
    
}
