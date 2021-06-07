<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
class BladeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if('hasAnyRoles',function($expression){
            if(Auth::user()){
                if(Auth::user()->hasAnyRoles($expression)){
                    return true;
                }
            }
            return false;
        });
        Blade::if('inpersonate',function(){
            if(Session()->get('inpersonate')){
                return true;
            }
            return false;
        });
    }
}
