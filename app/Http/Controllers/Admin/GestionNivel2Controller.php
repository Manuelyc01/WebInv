<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\GestionNivel2Request;
use App\Http\Controllers\Controller;
use App\Services\Admin\GestionNivel2Service;

class GestionNivel2Controller extends Controller
{
    private $service;

    public function __construct(GestionNivel2Service $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $elements = $this->service->listar();
        return view('admin.gestion-nivel2-adm.index', compact('elements'));
    }

    public function create()
    {
        $ddlGestionNivel1 = $this->service->ddlGestionNivel1();
        return view('admin.gestion-nivel2-adm.edit', compact('ddlGestionNivel1'));
    }

    public function store(GestionNivel2Request $request)
    {
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('gestion-nivel2-adm.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $ddlGestionNivel1 = $this->service->ddlGestionNivel1();
        $element = $this->service->editar($id);
        return view('admin.gestion-nivel2-adm.edit', compact('element','ddlGestionNivel1'));
    }

    public function update(GestionNivel2Request $request, $id)
    {
        $this->service->actualizar($request, $id);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('gestion-nivel2-adm.index');
    }

    public function destroy($id)
    {
        $this->service->eliminar($id);
        return redirect()->route('gestion-nivel2-adm.index');
    }
}
