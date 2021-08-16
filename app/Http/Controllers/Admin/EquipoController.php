<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EquipoRequest;
use App\Http\Controllers\Controller;
use App\Models\CategoriaEquipo;
use App\Services\EquipoService;
use App\Services\CategoriaEquipoService; 
use App\Services\ImagenService; 

class EquipoController extends Controller
{
    private $service;
    private $servImg;

    public function __construct(EquipoService $service,ImagenService $servImg,CategoriaEquipoService $catEquiServ)
    {
        $this->service = $service;
        $this->servImg = $servImg;
        $this->catEquiServ = $catEquiServ;
    }

    public function index()
    {
        $elements = $this->service->listar();
        return view('admin.equipo-adm.index', compact('elements'));
    }

    public function create()
    { 
        $catEqui= $this->catEquiServ->listar()->pluck('des_cate_equipo','id_cat_equipos');
        return view('admin.equipo-adm.edit',compact('catEqui'));
    }

    public function store(EquipoRequest $request)
    {
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('equipo-adm.index');
    }

    public function show($id)
    {
        $element = $this->service->show($id); 
        //obtener imagenes
        $imagenes= $this->servImg->getByEquipo($id); 
        $catEqui= $this->catEquiServ->editar($element->id_cat_equipos);
        return view('admin.equipo-adm.show',compact('element','imagenes','catEqui'));
    }
    public function edit($id_oficina)
    {
        $element = $this->service->editar($id_oficina); 
        //obtener imagenes
        $imagenes=$this->servImg->getByEquipo($id_oficina);
        $catEqui= $this->catEquiServ->listar()->pluck('des_cate_equipo','id_cat_equipos');   
        return view('admin.equipo-adm.edit',compact('element','imagenes','catEqui'));
    }

    public function update(EquipoRequest $request, $id_equipo)
    {
        $this->service->actualizar($request, $id_equipo);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('equipo-adm.index');
    }

    public function destroy($id)
    {
        $this->service->eliminar($id);
        return redirect()->route('equipo-adm.index');
    }
    public function img($id){
        $imagenes= $this->servImg->getByEquipo($id);
        $element=$this->service->show($id);
        return view('admin.equipo-adm.imgs',compact('imagenes','element'));
    }
}