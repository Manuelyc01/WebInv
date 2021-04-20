<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EtiquetaIndustrialRequest;
use App\Http\Controllers\Controller;
use App\Services\Admin\EtiquetaIndustrialService;

class EtiquetaIndustrialController extends Controller
{
    private $service;

    public function __construct(EtiquetaIndustrialService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $elements = $this->service->listar();
        return view('admin.etiqueta-industrial-adm.index', compact('elements'));
    }

    public function create()
    {
        return view('admin.etiqueta-industrial-adm.edit');
    }

    public function store(EtiquetaIndustrialRequest $request)
    {
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('etiqueta-industrial-adm.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $element = $this->service->editar($id);
        return view('admin.etiqueta-industrial-adm.edit', compact('element'));
    }

    public function update(EtiquetaIndustrialRequest $request, $id)
    {
        $this->service->actualizar($request, $id);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('etiqueta-industrial-adm.index');
    }

    public function destroy($id)
    {
        $this->service->eliminar($id);
        return redirect()->route('etiqueta-industrial-adm.index');
    }
}
