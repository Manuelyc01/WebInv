<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class GlobalServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*' , function($view) {

            $global['STATIC_URL'] = '/static/';
            
            $view->with($global);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
