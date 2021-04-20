<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TrabajoRequest;
use App\Http\Controllers\Controller;
use App\Services\Admin\TrabajoService;
use Illuminate\Http\Request;

class TrabajoController extends Controller
{
    private $service;

    public function __construct(TrabajoService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $elements = $this->service->listar();
        return view('admin.trabajo-adm.index', compact('elements'));
    }

    public function create()
    {
        $ddlDepartamento = $this->service->ddlDepartamento();
        return view('admin.trabajo-adm.edit', compact('ddlDepartamento'));
    }

    public function store(TrabajoRequest $request)
    {
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('trabajo-adm.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $ddlDepartamento = $this->service->ddlDepartamento();
        $element = $this->service->editar($id);
        return view('admin.trabajo-adm.edit', compact('element','ddlDepartamento'));
    }

    public function update(TrabajoRequest $request, $id)
    {
        $this->service->actualizar($request, $id);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('trabajo-adm.index');
    }

    public function destroy($id)
    {
        $this->service->eliminar($id);
        return redirect()->route('trabajo-adm.index');
    }

    public function activar(Request $request)
    {
        return $this->service->activarVisible($request);  
    }
}
