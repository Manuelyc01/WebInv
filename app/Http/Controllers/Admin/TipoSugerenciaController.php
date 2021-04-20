<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TipoSugerenciaRequest;
use App\Http\Controllers\Controller;
use App\Services\Admin\TipoSugerenciaService;

class TipoSugerenciaController extends Controller
{
    private $service;

    public function __construct(TipoSugerenciaService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $elements = $this->service->listar();
        return view('admin.tipo-sugerencia-adm.index', compact('elements'));
    }

    public function create()
    {
        return view('admin.tipo-sugerencia-adm.edit');
    }

    public function store(TipoSugerenciaRequest $request)
    {
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('tipo-sugerencia-adm.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $element = $this->service->editar($id);
        return view('admin.tipo-sugerencia-adm.edit', compact('element'));
    }

    public function update(TipoSugerenciaRequest $request, $id)
    {
        $this->service->actualizar($request, $id);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('tipo-sugerencia-adm.index');
    }

    public function destroy($id)
    {
        $this->service->eliminar($id);
        return redirect()->route('tipo-sugerencia-adm.index');
    }
}
