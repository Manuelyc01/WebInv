<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\OficinaRequest;
use App\Http\Controllers\Controller;
use App\Services\OficinaService; 
use App\Models\Sede;

class OficinaController extends Controller
{
    private $service;

    public function __construct(OficinaService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $elements = $this->service->listar();
        return view('admin.oficina-adm.index', compact('elements'));
    }

    public function create()
    {
        $sede= Sede::orderBy('no_sede',"ASC")->pluck('no_sede','id_sede');    
        return view('admin.oficina-adm.edit', compact('sede'));
    }

    public function store(OficinaRequest $request)
    {
        $this->service->registrar($request);
        
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('oficina-adm.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id_oficina)
    {
        $element = $this->service->editar($id_oficina);
        $sede= Sede::orderBy('no_sede',"ASC")->pluck('no_sede','id_sede');  
        return view('admin.oficina-adm.edit', compact('element','sede'));
    }

    public function update(OficinaRequest $request, $id_oficina)
    {
        $this->service->actualizar($request, $id_oficina);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('oficina-adm.index');
    }

    public function destroy($id)
    {
        $this->service->eliminar($id);
        return redirect()->route('oficina-adm.index');
    }
}
