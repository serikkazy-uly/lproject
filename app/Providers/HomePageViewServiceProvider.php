<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\HomePageViewLogger;


class HomePageViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton('homepageviewlogger', function($app){
            return new HomePageViewLogger();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
