<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\GestionNivel3Request;
use App\Http\Controllers\Controller;
use App\Services\Admin\GestionNivel3Service;

class GestionNivel3Controller extends Controller
{
    private $service;

    public function __construct(GestionNivel3Service $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $elements = $this->service->listar();
        return view('admin.gestion-nivel3-adm.index', compact('elements'));
    }

    public function create()
    {
        $ddlGestionNivel2 = $this->service->ddlGestionNivel2();
        return view('admin.gestion-nivel3-adm.edit', compact('ddlGestionNivel2'));
    }

    public function store(GestionNivel3Request $request)
    {
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('gestion-nivel3-adm.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $ddlGestionNivel2 = $this->service->ddlGestionNivel2();
        $element = $this->service->editar($id);
        return view('admin.gestion-nivel3-adm.edit', compact('element', 'ddlGestionNivel2'));
    }

    public function update(GestionNivel3Request $request, $id)
    {
        $this->service->actualizar($request, $id);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('gestion-nivel3-adm.index');
    }

    public function destroy($id)
    {
        $this->service->eliminar($id);
        return redirect()->route('gestion-nivel3-adm.index');
    }
}
