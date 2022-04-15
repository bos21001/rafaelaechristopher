<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\UrlGenerator;


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
    
    public function boot(UrlGenerator $url)
    {
        if (env('APP_ENV') !== 'local') {

            $url->forceScheme('https');

      }
    }


    // public function boot()
    // {
    //     //
    // }
}
