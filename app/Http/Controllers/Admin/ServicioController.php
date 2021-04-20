<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ServicioRequest;
use App\Http\Controllers\Controller;
use App\Services\Admin\ServicioService;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    private $service;

    public function __construct(ServicioService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $elements = $this->service->listar();
        return view('admin.servicio-adm.index', compact('elements'));
    }

    public function create()
    {
        $ddlDepartamento = $this->service->ddlDepartamento();
        $ddlCate = $this->service->ddlCate();
        return view('admin.servicio-adm.edit', compact('ddlDepartamento','ddlCate'));
    }

    public function store(ServicioRequest $request)
    {
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('servicio-adm.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $ddlDepartamento = $this->service->ddlDepartamento();
        $ddlCate = $this->service->ddlCate();
        $element = $this->service->editar($id);
        return view('admin.servicio-adm.edit', compact('element','ddlDepartamento','ddlCate'));
    }

    public function update(ServicioRequest $request, $id)
    {
        $this->service->actualizar($request, $id);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('servicio-adm.index');
    }

    public function destroy($id)
    {
        $this->service->eliminar($id);
        return redirect()->route('servicio-adm.index');
    }

    public function activar(Request $request)
    {
        return $this->service->activarVisible($request);  
    }
}
