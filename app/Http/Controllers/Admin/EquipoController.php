<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EquipoRequest;
use App\Http\Controllers\Controller;
use App\Services\EquipoService; 
use App\Services\ImagenService; 

class EquipoController extends Controller
{
    private $service;
    private $servImg;

    public function __construct(EquipoService $service,ImagenService $servImg)
    {
        $this->service = $service;
        $this->servImg = $servImg;
    }

    public function index()
    {
        $elements = $this->service->listar();
        return view('admin.equipo-adm.index', compact('elements'));
    }

    public function create()
    { 
        return view('admin.equipo-adm.edit');
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
            if($imagenes!=null){
                return view('admin.equipo-adm.show',compact('element','imagenes'));
            }else{
                return view('admin.equipo-adm.show',compact('element'));        
            }
        
    }

    public function edit($id_oficina)
    {
        $element = $this->service->editar($id_oficina); 
        return view('admin.equipo-adm.edit',compact('element'));
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
}