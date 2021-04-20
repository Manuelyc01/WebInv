<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DepartamentoRequest;
use App\Http\Controllers\Controller;
use App\Services\Admin\DepartamentoService;

class DepartamentoController extends Controller
{
    private $service;

    public function __construct(DepartamentoService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $elements = $this->service->listar();
        return view('admin.departamento-adm.index', compact('elements'));
    }

    public function create()
    {
        return view('admin.departamento-adm.edit');
    }

    public function store(DepartamentoRequest $request)
    {
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('departamento-adm.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $element = $this->service->editar($id);
        return view('admin.departamento-adm.edit', compact('element'));
    }

    public function update(DepartamentoRequest $request, $id)
    {
        $this->service->actualizar($request, $id);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('departamento-adm.index');
    }

    public function destroy($id)
    {
        $this->service->eliminar($id);
        return redirect()->route('departamento-adm.index');
    }
}
