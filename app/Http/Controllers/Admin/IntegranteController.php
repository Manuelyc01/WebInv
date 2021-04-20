<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\IntegranteRequest;
use App\Http\Controllers\Controller;
use App\Services\Admin\IntegranteService;

class IntegranteController extends Controller
{
    private $service;

    public function __construct(IntegranteService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $elements = $this->service->listar();
        return view('admin.integrante-adm.index', compact('elements'));
    }

    public function create()
    {
        $ddlCargo = $this->service->ddlCargo();
        $ddlNiveles = $this->service->ddlNiveles();
        return view('admin.integrante-adm.edit', compact('ddlCargo','ddlNiveles'));
    }

    public function store(IntegranteRequest $request)
    {
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('integrante-adm.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $ddlCargo = $this->service->ddlCargo();
        $ddlNiveles = $this->service->ddlNiveles();
        $element = $this->service->editar($id);
        return view('admin.integrante-adm.edit', compact('element','ddlCargo','ddlNiveles'));
    }

    public function update(IntegranteRequest $request, $id)
    {
        $this->service->actualizar($request, $id);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('integrante-adm.index');
    }

    public function destroy($id)
    {
        $this->service->eliminar($id);
        return redirect()->route('integrante-adm.index');
    }
}
