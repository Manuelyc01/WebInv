<?php

namespace Ems\AdminEms;

use Illuminate\Support\ServiceProvider;

class AdminLaravelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';

        $this->publishes([
            __DIR__.'/public' => public_path('vendor/ems'),
        ], 'public');

        // $this->publishes([
        //     __DIR__.'/config/sidebar.php' => config_path('sidebar.php'),
        // ]);

        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/vendor/ems')
        ], 'emsviews');

        $this->loadMigrationsFrom(__DIR__.'/migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //Controllers
        $this->app->make('Ems\AdminEms\controllers\AdminController');
        $this->loadViewsFrom(__DIR__.'/views', 'adminems');
    }
}
