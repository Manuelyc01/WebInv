<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\{Info,Industrial,Tradicional,Sede, GestionNivel2,CateServicio,Trabajo,Servicio,ProdIndus};

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
            $global['industrial'] = Industrial::first();
            $global['tradicional'] = Tradicional::first();
            $global['STATIC_URL'] = '/static/';
            $global['info'] = Info::first(); 
            $global['sede'] = Sede::first();
            $global['gestion'] = GestionNivel2::first();
            $global['servicio'] = CateServicio::first();

            $global['counttra'] = Trabajo::all();
            $global['countser'] = Servicio::all();
            
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
