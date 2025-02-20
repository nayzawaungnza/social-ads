<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
class SettingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['layouts.frontend.menu','layouts.frontend.master','layouts.frontend.footer'], function($view){
            $settings = DB::table('config_settings')->first();
            $services = DB::table('services')->where('status',1)->get();
            $view->with('settings', $settings);
        });
        
    }
}