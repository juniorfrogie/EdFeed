<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Institute;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // $institutes = Institute::orderBy('name')->get();
        // view()->share('institutes', $institutes);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
