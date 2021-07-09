<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CargoLaboralRequest;
use App\Http\Controllers\Controller;
use App\Services\CargoLaboralService; 

class CargoLaboralController extends Controller
{
    //
    private $service;

    public function __construct(CargoLaboralService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $elements = $this->service->listar();
        return view('admin.cargoLaboral-adm.index', compact('elements'));
    }

    public function create()
    {
        return view('admin.cargoLaboral-adm.edit');
    }

    public function store(CargoLaboralRequest $request)
    {
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('cargoLaboral-adm.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id_oficina)
    {
        $element = $this->service->editar($id_oficina);
        return view('admin.cargoLaboral-adm.edit', compact('element'));
    }

    public function update(CargoLaboralRequest $request, $id_oficina)
    {
        $this->service->actualizar($request, $id_oficina);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('cargoLaboral-adm.index');
    }

    public function destroy($id)
    {
        $this->service->eliminar($id);
        return redirect()->route('cargoLaboral-adm.index');
    }
}
