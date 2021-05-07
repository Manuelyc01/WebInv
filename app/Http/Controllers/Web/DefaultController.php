<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{Home,Banner,Industrial,Tradicional, GestionNivel1,GestionNivel2, GestionNivel3, GestionNivel3b, Info,InsumoIndustrial,ListoConsumir};
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class DefaultController extends Controller
{
   	public function home()
    {
        $data['industrial'] = Industrial::first();
        $data['tradicional'] = Tradicional::first();
        $data['insumo_industrial'] = InsumoIndustrial::first();
        $data['listo_consumir'] = ListoConsumir::first();
        
        $data['banners'] = Banner::orderBy('orden', 'ASC')->get();
        $data['home'] = Home::first();

        $client = new Client(); //GuzzleHttp\Client
        $enlaceBlog = Info::first()->enlaceBlog;
        $result = $client->get($enlaceBlog . '/wp-json/wp/v2/category', []);
        $data['categoria'] = json_decode($result->getBody());
        
        //dd($data['categoria']);

        return view("web.default.home", compact('data'));
    }

    public function gestion($slug, $slug2 = null)
    {
        
        $data['gestiones'] = GestionNivel1::orderBy('orden', 'ASC')->with('GestionNivel2')->get();
        // dd($data);

        if ($slug2 != null) {            
            $n2 = GestionNivel2::whereTranslation('slug', $slug)->first();
            $gn3 = GestionNivel3::whereTranslation('slug',$slug2)->where('gestion_nivel2_id', $n2->id)->first();
            $data['gestion'] = GestionNivel3b::where('gestion_nivel3_id',$gn3->id)->get();
            $data['tituloGeneral'] = $gn3->nombre;
        } else {
            $data['gestion'] = GestionNivel2::whereTranslation('slug',$slug)->get();
            $data['tituloGeneral'] = $data['gestion'][0]->titulo;
        }
        
        
        

        return view("web.default.gestion",compact('data'));
    }    

}