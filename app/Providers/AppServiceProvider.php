<?php

namespace App\Providers;

use App\Models\Check;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        try{
            View::share('checks',Check::all());
        }catch(\Throwable $th){
            View::share('checks',[]);
        }
        try {
            View::share('admin',User::whereRole('admin')->first());
        } catch (\Throwable $th) {
            View::share('admin',[]);
        }
        
    }
}
