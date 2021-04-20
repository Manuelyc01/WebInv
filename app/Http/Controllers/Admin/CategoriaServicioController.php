<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoriaServicioRequest;
use App\Http\Controllers\Controller;
use App\Services\Admin\CategoriaServicioService;

class CategoriaServicioController extends Controller
{
    private $service;

    public function __construct(CategoriaServicioService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $elements = $this->service->listar();
        return view('admin.categoria-servicio-adm.index', compact('elements'));
    }

    public function create()
    {
        return view('admin.categoria-servicio-adm.edit');
    }

    public function store(CategoriaServicioRequest $request)
    {
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('categoria-servicio-adm.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $element = $this->service->editar($id);
        return view('admin.categoria-servicio-adm.edit', compact('element'));
    }

    public function update(CategoriaServicioRequest $request, $id)
    {
        $this->service->actualizar($request, $id);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('categoria-servicio-adm.index');
    }

    public function destroy($id)
    {
        $this->service->eliminar($id);
        return redirect()->route('categoria-servicio-adm.index');
    }
}
