<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Major;

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
        // all views can access to major
        $majors = Major::orderBy('name')->get();
        view()->share('majors', $majors);
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
