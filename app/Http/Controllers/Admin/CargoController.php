<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CargoRequest;
use App\Http\Controllers\Controller;
use App\Services\Admin\CargoService;

class CargoController extends Controller
{
    private $service;

    public function __construct(CargoService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $elements = $this->service->listar();
        return view('admin.cargo-adm.index', compact('elements'));
    }

    public function create()
    {
        return view('admin.cargo-adm.edit');
    }

    public function store(CargoRequest $request)
    {
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('cargo-adm.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $element = $this->service->editar($id);
        return view('admin.cargo-adm.edit', compact('element'));
    }

    public function update(CargoRequest $request, $id)
    {
        $this->service->actualizar($request, $id);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('cargo-adm.index');
    }

    public function destroy($id)
    {
        $this->service->eliminar($id);
        return redirect()->route('cargo-adm.index');
    }
}
