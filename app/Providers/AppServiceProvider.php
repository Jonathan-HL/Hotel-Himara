<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
        Blade::if('admin', function () {
            return auth()->user()->role_id == 1;
        });

        Blade::if('webmaster', function () {
            return auth()->user()->role_id <= 2;
        });

        Blade::if('editor', function () {
            return auth()->user()->role_id <= 3;
        });
    }


}
