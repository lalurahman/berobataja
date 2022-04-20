<?php

namespace App\Providers;

use App\Models\Configuration;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class CustomServiceProvider extends ServiceProvider
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
        //
        $cnfgrs = Configuration::find(1)->first();
        View::share('cnfgrs', $cnfgrs);
    }
}
