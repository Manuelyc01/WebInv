<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{Trabajo, Departamento, CateServicio, Servicio};

class BolsasController extends Controller
{
   	public function trabajos($slug)
    {
        $data['departamento'] = Departamento::all();

        if ($slug == 'todos') {
            $data['trabajos'] = Trabajo::where('visible', 1)->get();
        } else {
            $departamento = Departamento::whereTranslation('slug',$slug)->first();
            $data['trabajos'] = Trabajo::where('departamento_id',$departamento->id)->where('visible', 1)->get();
        }
        
        return view("web.bolsas.trabajos",compact('data'));
    }

    public function servicios($slug)
    {
        $data['departamento'] = Departamento::all();
        $data['categorias'] = CateServicio::all();

        if ($slug == 'todos') {
            $data['servicios'] = Servicio::all();
        } else {
            $categoria = CateServicio::whereTranslation('slug',$slug)->first();
            $data['categoria'] = $categoria;
            $data['servicios'] = Servicio::where('cate_servicio_id',$categoria->id)->get();
        }
        
        return view("web.bolsas.servicios", compact('data'));
    }    

    public function serviciosDepartamento($slug, $slug2)
    {
        $data['departamento'] = Departamento::all();
        $data['categorias'] = CateServicio::all();

        
        $categoria = CateServicio::whereTranslation('slug',$slug)->first();
        $data['categoria'] = $categoria;
        $departamento = Departamento::whereTranslation('slug',$slug2)->first();
        $data['servicios'] = Servicio::where('cate_servicio_id',$categoria->id)->where('departamento_id',$departamento->id)->get();
        
        
        return view("web.bolsas.servicios", compact('data'));
    }    

}