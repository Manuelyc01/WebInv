<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\GestionNivel3bRequest;
use App\Http\Controllers\Controller;
use App\Services\Admin\GestionNivel3bService;

class GestionNivel3bController extends Controller
{
    private $service;

    public function __construct(GestionNivel3bService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $elements = $this->service->listar();
        return view('admin.gestion-nivel3b-adm.index', compact('elements'));
    }

    public function create()
    {
        $ddlGestionNivel3 = $this->service->ddlGestionNivel3();
        return view('admin.gestion-nivel3b-adm.edit', compact('ddlGestionNivel3'));
    }

    public function store(GestionNivel3bRequest $request)
    {
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('gestion-nivel3b-adm.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $ddlGestionNivel3 = $this->service->ddlGestionNivel3();
        $element = $this->service->editar($id);
        return view('admin.gestion-nivel3b-adm.edit', compact('element','ddlGestionNivel3'));
    }

    public function update(GestionNivel3bRequest $request, $id)
    {
        $this->service->actualizar($request, $id);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('gestion-nivel3b-adm.index');
    }

    public function destroy($id)
    {
        $this->service->eliminar($id);
        return redirect()->route('gestion-nivel3b-adm.index');
    }
}
