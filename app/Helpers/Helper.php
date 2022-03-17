<?php
use Carbon\Carbon;
use App\Models\RxData;
use App\Models\SmProfile;
use App\Models\DoctorList;
use App\Models\DsmProfile;
use App\Models\PsoProfile;
use App\Models\RsmProfile;
use App\Models\AdminProfile;
use App\Models\DoctorProfile;
use Symfony\Component\HttpFoundation\File\getClientOriginalName;

class Helper{
    
    public static function imgProcess($image, $name, $owner, $id, $directory, $method, $model=null)
    {
            
        
            $image_path = public_path().'/'.$directory;
            $pic_owner = $owner?strtolower(str_replace(' ','-', $owner)).'-':'';

            if($method == 'store'){

                if($image->hasFile($name)){

                   
                    $imageArr = [];
                    if(is_array($image->file($name))){

                        foreach ($images = $image->file($name) as $key => $img) {

                           if(!empty($img)){

                            $extension = $img->getClientOriginalExtension();
                            // $fileName = $image->getClientOriginalName();
                            $fileName    = $pic_owner.$key.date('d-m-Y').'-'.time().'.'.$extension;
                            $img->move($image_path, $fileName); 

                           }
  

                            $imageArr[$key][$name] = $fileName; 
                        }  

                        return $imageArr;

                    } else {

                        $image = $image->$name;
                        $extension = $image->getClientOriginalExtension();
                        // $fileName = $image->getClientOriginalName();
                        $fileName    = $pic_owner.date('d-m-Y').'-'.time().'.'.$extension;
                        $image->move($image_path, $fileName);  

                    }

                } else {

                    $fileName = "not found";

                }

                return $fileName;

            } elseif($method == 'update') {

                $getImage = $model::find($id)[$name];

                if($image->hasFile($name)){
                
                    $imageArr = [];
                    if(is_array($image->file($name))){

                        foreach ($images = $image->file($name) as $key => $img) {

                           if(!empty($img)){

                            $extension = $img->getClientOriginalExtension();
                            // $fileName = $image->getClientOriginalName();
                            $fileName    = $pic_owner.$key.date('d-m-Y').'-'.time().'.'.$extension;
                            $img->move($image_path, $fileName); 

                           }

                            $imageArr[$key][$name] = $fileName; 
                        }  

                        return $imageArr;

                    } else {
                        
                        if($getImage){

                            unlink($image_path.'/'.$getImage);
                            
                        } 
       
                       $image       = $image->$name;
                       $extension   = $image->getClientOriginalExtension();
                       // $fileName = $image->getClientOriginalName();
                       $fileName    = $pic_owner.date('d-m-Y').'-'.time().'.'.$extension;
                       $image->move($image_path, $fileName);

                    }
                

                } else {

                   $fileName = $getImage;     

                }

                return $fileName;
            }      
        
    }

    public static function publicUrl($param){
        return url($param);
    }

    //USER ID AUTOGENERATE
    public static function userIdGenerator($userRole) {
        switch ($userRole) {
            case 'ADMIN':
                $check = AdminProfile::orderBy('id', 'desc')->exists();
                if($check) {
                    $user_id = AdminProfile::orderBy('id', 'desc')->first()->user_id;
                    $substr = (int)substr($user_id, 9)  + 1;
                    $user_id = 'RX-ADMIN-'.$substr;

                } else {
                    $user_id = 'RX-ADMIN-1';
                }
                break; 
            case 'DOCTOR':
                $check = DoctorList::orderBy('id', 'desc')->exists();
                if($check) {
                    $user_id = DoctorList::orderBy('id', 'desc')->first()->doctor_id;
                    $substr = (int)substr($user_id, 6)  + 1;
                    $user_id = 'RX-DR-'.$substr;

                } else {
                    $user_id = 'RX-DR-1';
                }
                break; 
            case 'SM':
                 $check = SmProfile::orderBy('id', 'desc')->exists();
                if($check) {
                    $user_id = SmProfile::orderBy('id', 'desc')->first()->user_id;
                    $substr = (int)substr($user_id, 6)  + 1;
                    $user_id = 'SM-VS-'.$substr;

                } else {

                    $user_id = 'SM-VS-1';
                }
              break;
            case 'RSM':
                $check = RsmProfile::orderBy('id', 'desc')->exists();
                if($check) {
                    $user_id = RsmProfile::orderBy('id', 'desc')->first()->user_id;
                    $substr = (int)substr($user_id, 6)  + 1;
                    $user_id = 'RS-VS-'.$substr;

                } else {

                    $user_id = 'RS-VS-1';
                }
              break;
            case 'DSM':
                $check = DsmProfile::orderBy('id', 'desc')->exists();
                if($check) {
                    $user_id = DsmProfile::orderBy('id', 'desc')->first()->user_id;
                    $substr = (int)substr($user_id, 6)  + 1;
                    $user_id = 'DS-VS-'.$substr;

                } else {

                    $user_id = 'DS-VS-1';
                }
                break;
            case 'PSO':
                $check = PsoProfile::orderBy('id', 'desc')->exists();
                if($check) {
                    $user_id = PsoProfile::orderBy('id', 'desc')->first()->user_id;
                    $substr = (int)substr($user_id, 6)  + 1;
                    $user_id = 'PS-VS-'.$substr;

                } else {
                    
                    $user_id = 'PS-VS-1';
                }
                break;
            case 'RX':
                $check = RxData::orderBy('id', 'desc')->exists();
                if($check) {
                    $user_id = RxData::orderBy('id', 'desc')->first()->rx_no;
                    $substr = (int)substr($user_id, 6)  + 1;
                    $user_id = 'RX-VS-'.$substr;

                } else {
                    
                    $user_id = 'RX-VS-1';
                }
                break;
          }
           
          return $user_id;
    }


    public static function onlyBrands($query, $brand){
        $query->where('product_1', 'LIKE', "%{$brand}%")
        ->orWhere('product_2', 'LIKE', "%{$brand}%")
        ->orWhere('product_3', 'LIKE', "%{$brand}%")
        ->orWhere('product_4', 'LIKE', "%{$brand}%")
        ->orWhere('product_5', 'LIKE', "%{$brand}%");    
    }

    public static function onlyProducts($query){
        $query->where('product_1', 'LIKE', "%{$product}%")
        ->orWhere('product_2', 'LIKE', "%{$product}%")
        ->orWhere('product_3', 'LIKE', "%{$product}%")
        ->orWhere('product_4', 'LIKE', "%{$product}%")
        ->orWhere('product_5', 'LIKE', "%{$product}%");
    }

    public function onlyProductsAndBrands($query,$brand, $product){
        $query->where('product_1', 'LIKE', "%{$brand}%")
        ->orWhere('product_2', 'LIKE', "%{$brand}%")
        ->orWhere('product_3', 'LIKE', "%{$brand}%")
        ->orWhere('product_4', 'LIKE', "%{$brand}%")
        ->orWhere('product_5', 'LIKE', "%{$brand}%") 
        ->where('product_1', 'LIKE', "%{$product}%")
        ->orWhere('product_2', 'LIKE', "%{$product}%")
        ->orWhere('product_3', 'LIKE', "%{$product}%")
        ->orWhere('product_4', 'LIKE', "%{$product}%")
        ->orWhere('product_5', 'LIKE', "%{$product}%"); 
    }

    public static function rxReportFilter($request)
    {
        $brand          = $request->brand;
        $c_end_date     = $request->c_end_date;
        $c_start_date   = $request->c_start_date;
        $dsm            = $request->dsm;
        $product        = $request->product;
        $pso            = $request->pso;
        $region         = $request->region;
        $rsm            = $request->rsm;
        $sm             = $request->sm;
        $team           = $request->team;

        $getPso = PsoProfile::where('ffc',$pso)->first();

        $mainQuery = RxData::whereBetween('n_date', [$request->c_start_date, $request->c_end_date]);

        if (($sm == null) && ($rsm == null)&& ($dsm == null) && ($pso == null) && ($brand == null) && ($product == null) && ($region == null) && ($team == null))
        {

            $result = $mainQuery
            ->distinct('pso_ffc')
            ->paginate(20);
            
        } elseif (($sm != null) && ($rsm == null)&& ($dsm == null) && ($pso == null) && ($brand == null) && ($product == null) && ($region == null) && ($team == null))
        {

        $result = $mainQuery->where('sm_ffc', $sm)
        ->distinct('pso_ffc')
        ->paginate(20);
        
        }
        
        elseif (($sm != null) && ($rsm == null)&& ($dsm == null) && ($pso == null) && ($brand != null) && ($product == null) && ($region == null) && ($team == null))
        {

        $result = $mainQuery->where('sm_ffc', $sm)
        ->where(function($query) use($brand){
            self::onlyBrands($query, $brand);
        })
        ->distinct('pso_ffc')
        ->paginate(20);
        }
        
        elseif (($sm != null) && ($rsm == null)&& ($dsm == null) && ($pso == null) && ($brand == null) && ($product != null) && ($region == null) && ($team == null))
        {

        $result = $mainQuery->where('sm_ffc', $sm)
        ->where(function($query) use($product){
            self::onlyProducts($query, $product);
        })
        ->distinct('pso_ffc')
        ->paginate(20);
        
        }
        
        elseif (($sm != null) && ($rsm == null)&& ($dsm == null) && ($pso == null) && ($brand != null) && ($product != null) && ($region == null) && ($team == null))
        {

        $result = $mainQuery->where('sm_ffc', $sm)
        ->where(function($query) use($brand, $product){
            self::onlyProductsAndBrands($query, $brand, $product);
        })
        ->distinct('pso_ffc')
        ->paginate(20);
        
        }
        
        elseif (($sm != null) && ($rsm != null)&& ($dsm == null) && ($pso == null) && ($brand == null) && ($product == null) && ($region == null) && ($team == null))
        {
        
        $result = $mainQuery->where('sm_ffc', $sm)
        ->where('rsm_ffc', $rsm)
        ->distinct('pso_ffc')
        ->paginate(20);
        
        }

        elseif (($sm != null) && ($rsm != null)&& ($dsm == null) && ($pso == null) && ($brand != null) && ($product == null) && ($region == null) && ($team == null))
        {

        $result = $mainQuery->where('sm_ffc', $sm)
        ->where('rsm_ffc', $rsm)
        ->where(function($query) use($brand){
            self::onlyBrands($query, $brand);
        })
        ->distinct('pso_ffc')
        ->paginate(20);

        }				
        
        
        elseif (($sm != null) && ($rsm != null)&& ($dsm == null) && ($pso == null) && ($brand == null) && ($product != null) && ($region == null) && ($team == null))
        {

        $result = $mainQuery->where('sm_ffc', $sm)
        ->where('rsm_ffc', $rsm)
        ->where(function($query) use($product){
           self::onlyProducts($query, $product);
        })
        ->distinct('pso_ffc')
        ->paginate(20);
        
        }
        
        elseif (($sm != null) && ($rsm != null)&& ($dsm == null) && ($pso == null) && ($brand != null) && ($product != null) && ($region == null) && ($team == null))
        {

        $result = $mainQuery->where('sm_ffc', $sm)
        ->where('rsm_ffc', $rsm)
        ->where(function($query) use($brand, $product){
            self::onlyProductsAndBrands($query, $brand, $product);
        })
        ->distinct('pso_ffc')
        ->paginate(20);
        
        }
        
        elseif (($sm != null) && ($rsm != null)&& ($dsm != null) && ($pso == null) && ($brand == null) && ($product == null) && ($region == null) && ($team == null))
        {

        $result = $mainQuery->where('sm_ffc', $sm)
        ->where('rsm_ffc', $rsm)
        ->where('dsm_ffc', $dsm)
        ->distinct('pso_ffc')
        ->paginate(20);
        
        }
        
        elseif (($sm != null) && ($rsm != null)&& ($dsm != null) && ($pso == null) && ($brand != null) && ($product == null) && ($region == null) && ($team == null))
        {

        $result = $mainQuery->where('sm_ffc', $sm)
        ->where('rsm_ffc', $rsm)
        ->where('dsm_ffc', $dsm)
        ->where(function($query) use($brand){
            self::onlyBrands($query, $brand);
        })
        ->distinct('pso_ffc')
        ->paginate(20);
        
        }
        
        
        elseif (($sm != null) && ($rsm != null)&& ($dsm != null) && ($pso == null) && ($brand == null) && ($product != null) && ($region == null) && ($team == null))
        {

        $result = $mainQuery->where('sm_ffc', $sm)
        ->where('rsm_ffc', $rsm)
        ->where('dsm_ffc', $dsm)
        ->where(function($query) use($product){
            self::onlyProducts($query, $product);
        })
        ->distinct('pso_ffc')
        ->paginate(20);
        
        }
        
        elseif (($sm != null) && ($rsm != null)&& ($dsm != null) && ($pso == null) && ($brand != null) && ($product != null) && ($region == null) && ($team == null))
        {

        $result = $mainQuery->where('sm_ffc', $sm)
        ->where('rsm_ffc', $rsm)
        ->where('dsm_ffc', $dsm)
        ->where(function($query) use($brand, $product){
            self::onlyProductsAndBrands($query, $brand, $product);
        })
        ->distinct('pso_ffc')
        ->paginate(20);
        
        }



        
        
        elseif (($sm != null) && ($rsm != null)&& ($dsm != null) && ($pso != null) && ($brand == null) && ($product == null) && ($region == null) && ($team == null))
        {

        $result = $mainQuery->where('sm_ffc', $sm)
        ->where('rsm_ffc', $rsm)
        ->where('dsm_ffc', $dsm)
        ->where('pso_ffc', $getPso->ffc)
        ->distinct('pso_ffc')
        ->paginate(20);
        
        }
        
        elseif (($sm != null) && ($rsm != null)&& ($dsm != null) && ($pso != null) && ($brand != null) && ($product == null) && ($region == null) && ($team == null))
        {

        $result = $mainQuery->where('sm_ffc', $sm)
        ->where('rsm_ffc', $rsm)
        ->where('dsm_ffc', $dsm)
        ->where('pso_ffc', $getPso->ffc)
        ->where(function($query) use($brand){
            self::onlyBrands($query, $brand);
        })
        ->distinct('pso_ffc')
        ->paginate(20);
        
        }
        
        elseif (($sm != null) && ($rsm != null)&& ($dsm != null) && ($pso != null) && ($brand == null) && ($product != null) && ($region == null) && ($team == null))
        {

        $result = $mainQuery->where('sm_ffc', $sm)
        ->where('rsm_ffc', $rsm)
        ->where('dsm_ffc', $dsm)
        ->where('pso_ffc', $getPso->ffc)
        ->where(function($query) use($product){
            self::onlyProducts($query, $product);
        })
        ->distinct('pso_ffc')
        ->paginate(20);
        
        }
        
        elseif (($sm != null) && ($rsm != null)&& ($dsm != null) && ($pso != null) && ($brand != null) && ($product != null) && ($region == null) && ($team == null))
        {

        $result = $mainQuery->where('sm_ffc', $sm)
        ->where('rsm_ffc', $rsm)
        ->where('dsm_ffc', $dsm)
        ->where('pso_ffc', $getPso->ffc)
        ->where(function($query) use($brand, $product){

            self::onlyProductsAndBrands($query, $brand, $product);
        })
        ->distinct('pso_ffc')
        ->paginate(20);
        
        }
        

        elseif (($sm != null) && ($rsm != null)&& ($dsm != null) && ($pso != null) && ($brand != null) && ($product != null) && ($region != null) && ($team == null))
        {


        $result = $mainQuery->where('sm_ffc', $sm)
        ->where('rsm_ffc', $rsm)
        ->where('dsm_ffc', $dsm)
        ->where('pso_ffc', $getPso->ffc)
        ->where('region', $region)
        ->where(function($query) use($onlyProductsAndBrands){
            self::onlyProductsAndBrands($query, $brand, $product);
        })
        ->distinct('pso_ffc')
        ->paginate(20);
        
        }				

        
        elseif (($sm != null) && ($rsm != null)&& ($dsm != null) && ($pso != null) && ($brand != null) && ($product != null) && ($region != null) && ($team != null))
        {

        $result = $mainQuery->where('sm_ffc', $sm)
        ->where('rsm_ffc', $rsm)
        ->where('dsm_ffc', $dsm)
        ->where('pso_ffc', $getPso->ffc)
        ->where('region', $region)
        ->where(function($query) use($brand){
            self::onlyBrands($query, $brand);
        })
        ->distinct('pso_ffc')
        ->paginate(20);
        
        }
        
        elseif (($sm == null) && ($rsm != null)&& ($dsm == null) && ($pso == null) && ($brand == null) && ($product == null) && ($region == null) && ($team == null))
        {

        $result = $mainQuery->where('rsm_ffc', $rsm)
        ->distinct('pso_ffc')
        ->paginate(_ffc20);
        
        }
        
        elseif (($sm == null) && ($rsm == null)&& ($dsm != null) && ($pso == null) && ($brand == null) && ($product == null) && ($region == null) && ($team == null))   
        {

        $result = $mainQuery->where('dsm_ffc', $dsm)
        ->distinct('pso_ffc')
        ->paginate(20);
        
        }
        
        elseif (($sm == null) && ($rsm == null)&& ($dsm == null) && ($pso != null) && ($brand == null) && ($product == null) && ($region == null) && ($team == null))
        {

      

        $result = $mainQuery->where('pso_ffc', $getPso->ffc)
        ->distinct('pso_ffc')
        ->paginate(20);
        
        }
        
        
        elseif (($sm == null) && ($rsm == null)&& ($dsm == null) && ($pso == null) && ($brand != null) && ($product == null) && ($region == null) && ($team == null))
        {

        $result = $mainQuery->where(function($query) use($brand){
            self::onlyBrands($query, $brand);
        })
        ->distinct('pso_ffc')
        ->paginate(20);
        
        }

        elseif (($sm == null) && ($rsm == null)&& ($dsm == null) && ($pso == null) && ($brand == null) && ($product != null) && ($region == null) && ($team == null))
        {

        $result = $mainQuery->where(function($query) use($product){
            self::onlyProducts($query, $product);
        })
        ->distinct('pso_ffc')
        ->paginate(20);
        
        }
        
        elseif (($sm == null) && ($rsm == null)&& ($dsm == null) && ($pso == null) && ($brand == null) && ($product == null) && ($region != null) && ($team == null))
        {


        $result = $mainQuery->where('region', $region)
        ->distinct('pso_ffc')
        ->paginate(20);
        
        }
        
        elseif (($sm == null) && ($rsm == null)&& ($dsm == null) && ($pso == null) && ($brand == null) && ($product == null) && ($region == null) && ($team != null))
        {

        $result = $mainQuery->where('team', $team)
        ->distinct('pso_ffc')
        ->paginate(20);
        
        }

        $data['main_query'] = $mainQuery;
        $data['result'] = $result;

        return $data;
    }


    public static function rxSummaryFilter($request)
    {
        $filterResult = self::rxReportFilter($request)['result'];

        $brand = $request->brand;
        $product = $request->product;

        $mainQuery = self::rxReportFilter($request)['main_query'];

        foreach($filterResult as $key => $data){

            if($brand == null && $product == null){

                $product_1 = $mainQuery->distinct('product_1')->count();
                $product_2 = $mainQuery->distinct('product_2')->count();
                $product_3 = $mainQuery->distinct('product_3')->count();
                $product_4 = $mainQuery->distinct('product_4')->count();
                $product_5 = $mainQuery->distinct('product_5')->count();
    
                $no_of_rx = $product_1 + $product_2 + $product_3 + $product_4 + $product_5; 
    
            } else if($brand != null && $product == null){
    
                $no_of_rx = $mainQuery->where(function($query) use($brand){
                    self::onlyBrands($query, $brand);
                })->count('rx_no');
    
            } else if($brand == null && $product != null){
    
                $no_of_rx = $mainQuery->where(function($query) use($product){
                    self::onlyProducts($query, $product);
                })->count('rx_no');
                
            } else if($brand == null && $product == null){
    
                $no_of_rx = $mainQuery->where(function($query) use($brand, $product){
                    self::onlyProductAndBrands($query, $brand, $product);
                })->count('rx_no');
                
            } 
    
    
            
            $start_date = Carbon::parse($request->c_start_date);
            $end_date   = Carbon::parse($request->c_end_date);
            $totalDay = $end_date->diffInDays($start_date);
            $filterResult[$key]['total_day']  = $totalDay;
            $filterResult[$key]['avg_rx']     = $no_of_rx / $totalDay;
            $filterResult[$key]['no_of_rx']   = $no_of_rx;
            $filterResult[$key]['nrx']        = $mainQuery->distinct('n_date')->count();

        }

        return $filterResult;
    }
}