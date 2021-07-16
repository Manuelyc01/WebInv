<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EquipoRequest;
use App\Http\Controllers\Controller;
use App\Services\EquipoService; 

class EquipoController extends Controller
{
    private $service;

    public function __construct(EquipoService $service)
    {
        $this->service = $service;
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
        //
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
