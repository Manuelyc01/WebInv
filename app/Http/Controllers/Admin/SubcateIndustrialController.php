<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SubcateIndustrialRequest;
use App\Http\Controllers\Controller;
use App\Services\Admin\SubcateIndustrialService;

class SubcateIndustrialController extends Controller
{
    private $service;

    public function __construct(SubcateIndustrialService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $elements = $this->service->listar();
        return view('admin.subcategoria-industrial-adm.index', compact('elements'));
    }

    public function create()
    {
        return view('admin.subcategoria-industrial-adm.edit');
    }

    public function store(SubcateIndustrialRequest $request)
    {
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('subcategoria-industrial-adm.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $element = $this->service->editar($id);
        return view('admin.subcategoria-industrial-adm.edit', compact('element'));
    }

    public function update(SubcateIndustrialRequest $request, $id)
    {
        $this->service->actualizar($request, $id);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('subcategoria-industrial-adm.index');
    }

    public function destroy($id)
    {
        $this->service->eliminar($id);
        return redirect()->route('subcategoria-industrial-adm.index');
    }
}
