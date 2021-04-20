<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductoIndustrialRequest;
use App\Http\Controllers\Controller;
use App\Services\Admin\ProductoIndustrialService;

class ProductoIndustrialController extends Controller
{
    private $service;

    public function __construct(ProductoIndustrialService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $elements = $this->service->listar();
        return view('admin.producto-industrial-adm.index', compact('elements'));
    }

    public function create()
    {
        $ddlSubcatIndustrial = $this->service->ddlSubcatIndustrial();
        $ddlEtiquetaIndustrial = $this->service->ddlEtiquetaIndustrial();
        $ddlExportacion = $this->service->ddlExportacion();
        $productos = $this->service->listarProductosIndustrialesRelacionados();
        return view('admin.producto-industrial-adm.edit', compact('ddlSubcatIndustrial','ddlEtiquetaIndustrial', 'ddlExportacion', 'productos'));
    }

    public function store(ProductoIndustrialRequest $request)
    {
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('producto-industrial-adm.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $ddlSubcatIndustrial = $this->service->ddlSubcatIndustrial();
        $ddlEtiquetaIndustrial = $this->service->ddlEtiquetaIndustrial();
        $ddlExportacion = $this->service->ddlExportacion();
        $productos = $this->service->listarProductosIndustrialesRelacionados();
        $element = $this->service->editar($id);
        return view('admin.producto-industrial-adm.edit', compact('element','ddlSubcatIndustrial','ddlEtiquetaIndustrial', 'ddlExportacion', 'productos'));
    }

    public function update(ProductoIndustrialRequest $request, $id)
    {
        $this->service->actualizar($request, $id);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('producto-industrial-adm.index');
    }

    public function destroy($id)
    {
        $this->service->eliminar($id);
        return redirect()->route('producto-industrial-adm.index');
    }
}
