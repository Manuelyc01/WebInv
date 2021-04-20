<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductoTradicionalRequest;
use App\Http\Controllers\Controller;
use App\Services\Admin\ProductoTradicionalService;

class ProductoTradicionalController extends Controller
{
    private $service;

    public function __construct(ProductoTradicionalService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $elements = $this->service->listar();
        return view('admin.producto-tradicional-adm.index', compact('elements'));
    }

    public function create()
    {
        $ddlEtiquetaTradicional = $this->service->ddlEtiquetaTradicional();
        $productos = $this->service->listarProductosTradicionaleslesRelacionados();
        return view('admin.producto-tradicional-adm.edit', compact('ddlEtiquetaTradicional', 'productos'));
    }

    public function store(ProductoTradicionalRequest $request)
    {
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('producto-tradicional-adm.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $ddlEtiquetaTradicional = $this->service->ddlEtiquetaTradicional();
        $productos = $this->service->listarProductosTradicionaleslesRelacionados();
        $element = $this->service->editar($id);
        return view('admin.producto-tradicional-adm.edit', compact('element', 'ddlEtiquetaTradicional', 'productos'));
    }

    public function update(ProductoTradicionalRequest $request, $id)
    {
        $this->service->actualizar($request, $id);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('producto-tradicional-adm.index');
    }

    public function destroy($id)
    {
        $this->service->eliminar($id);
        return redirect()->route('producto-tradicional-adm.index');
    }
}
