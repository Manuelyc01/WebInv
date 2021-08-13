<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SedeRequest;
use App\Http\Controllers\Controller;
use App\Services\SedeService;

class SedeController extends Controller
{
    private $service;

    public function __construct(SedeService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $elements = $this->service->listar();
        return view('admin.sede-adm.index', compact('elements'));
    }

    public function create()
    {
        return view('admin.sede-adm.edit');
    }

    public function store(SedeRequest $request)
    {
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('sede-adm.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id_sede)
    {
        $element = $this->service->editar($id_sede);
        return view('admin.sede-adm.edit', compact('element'));
    }

    public function update(SedeRequest $request, $id_sede)
    {
        $this->service->actualizar($request, $id_sede);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('sede-adm.index');
    }

    public function destroy($id)
    {
        $this->service->eliminar($id);
        return redirect()->route('sede-adm.index');
    }
}