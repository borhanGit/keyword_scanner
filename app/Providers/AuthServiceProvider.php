<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin', function(){
            if(Auth::user()->role === "ADMIN"){
                return true;
            }
        });
       
        Gate::define('sm', function(){
            if(Auth::user()->role === "SM"){
                return true;
            }
        });
        Gate::define('rsm', function(){
            if(Auth::user()->role === "RSM"){
                return true;
            }
        });
        Gate::define('dsm', function(){
            if(Auth::user()->role === "DSM"){
                return true;
            }
        });
        Gate::define('pso', function(){
            if(Auth::user()->role === "PSO"){
                return true;
            }
        });

        //
    }
}
