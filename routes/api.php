<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Auth\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });



Route::group(['namespace' => 'API', 'middleware' => 'api'], function(){
    Route::post('/signin', 'Auth\AuthController@signIn');
    Route::post('/register', 'Auth\AuthController@register');
    Route::post('/signout', 'Auth\AuthController@signOut');
});

Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::group(['namespace'  => 'API\AdminPanel'], function(){
        Route::apiResources([
            'admin-profile'             => 'AdminMainProfile',
            'admin'                     => 'AdminController',
                        
        ]);
        

        Route::get('total-panel-user', 'AdminCommonController@totalPanelUser');

    });
 
    // category
    Route::group(['namespace' => 'API\Category'], function(){
        Route::apiResources([
            'category'               => 'CategoryController',
            'sub-category'               => 'SubCategoryController',
            
        ]);
        Route::post('category-wise-subCategory' , 'SubCategoryController@categoryWiseSubcategory');

    });
    // Manufacturer
    Route::group(['namespace' => 'API\Manufacturer'], function(){
        Route::apiResources([
            'manufacturer'               => 'ManufacturerController',            
        ]);

    });
    // generic
    Route::group(['namespace' => 'API\Generic'], function(){
        Route::apiResources([
            'generic'               => 'GenericController',            
        ]);

    });
    // Units
    Route::group(['namespace' => 'API\Units'], function(){
        Route::apiResources([
            'units'               => 'UnitsController',            
        ]);

    });
    // Product
    Route::group(['namespace' => 'API\Products'], function(){
        Route::apiResources([
            'product'               => 'ProductController',            
        ]);

    });
});


