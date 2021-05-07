<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{Industrial,Tradicional,ProdIndus,ProdTradi,EtiquetaIndus,InsumoIndustrial,ListoConsumir};

class ProductosController extends Controller
{
   	public function productos()
    {
        $data['industrial'] = Industrial::first();
        $data['tradicional'] = Tradicional::first();
        $data['insumo_industrial'] = InsumoIndustrial::first();
        $data['listo_consumir'] = ListoConsumir::first();
        
        return view("web.productos.productos",compact('data'));
    }

    public function industrial($slug)
    {
        //dd($slug);
        $data['industrial'] = Industrial::first();

        if ($slug == 'todos') {
            $data['productos'] = ProdIndus::paginate(6);
        } else {
            $etiqueta = EtiquetaIndus::whereTranslation('slug', $slug)->first();
            $data['productos'] = ProdIndus::where('etiqueta_indus_id', $etiqueta->id)->paginate(6);
 
            //dd($data['productos']);
        }
        
        $data['etiqueta'] = EtiquetaIndus::all();
        return view("web.productos.industrial",compact('data'));
    }   
    
    public function tradicional()
    {
        $data['tradicional'] = Tradicional::first();
        $data['productos'] = ProdTradi::all();
        
        return view("web.productos.tradicional",compact('data'));
    } 
    
    public function detalleindustrial($slug)
    {
        $data['producto'] = ProdIndus::whereTranslation('slug',$slug)->first();
        return view("web.productos.detalleindustrial",compact('data'));
    } 

    public function detalletradicional($slug)
    {
        $data['producto'] = ProdTradi::whereTranslation('slug',$slug)->first();
        return view("web.productos.detalletradicional",compact('data'));
    } 

}