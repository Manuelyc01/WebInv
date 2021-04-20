<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DiccionarioRequest;
use App\Http\Controllers\Controller;
use App\Services\Admin\DiccionarioService;

class DiccionarioController extends Controller
{
    private $service;

    public function __construct(DiccionarioService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $elements = $this->service->listar();
        return view('admin.diccionario.index', compact('elements'));
    }

    public function create()
    {
        $productos = $this->service->listarProductosRelacionados();
        return view('admin.diccionario.edit', compact('productos'));
    }

    public function store(DiccionarioRequest $request)
    {
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('diccionario.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {        
        $element = $this->service->editar($id);
        return view('admin.diccionario.edit', compact('element'));
    }

    public function update(DiccionarioRequest $request, $id)
    {
        $this->service->actualizar($request, $id);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('diccionario.index');
    }

    public function destroy($id)
    {
        $this->service->eliminar($id);
        return redirect()->route('diccionario.index');
    }
}
