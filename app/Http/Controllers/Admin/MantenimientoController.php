<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MantenimientoRequest;
use App\Http\Controllers\Controller;
use App\Services\MantenimientoService;
use App\Services\OfiTrabajadorEquipoService;

class MantenimientoController extends Controller
{
    private $service;

    public function __construct(MantenimientoService $service,OfiTrabajadorEquipoService $ofiTrabaEquiService)
    {
        $this->service = $service;
        $this->ofiTrabaEquiService = $ofiTrabaEquiService;
        
    }

    public function index()
    {
        $elements = $this->service->listar();
        return view('admin.mantenimiento-adm.index', compact('elements'));
    }
    public function byEquiTrabaEqui($id)
    {   
        $elements = $this->service->listarByEquiTrabaEqui($id);
        return view('admin.mantenimiento-adm.index', compact('elements','id'));
    }

    public function create($id,$val)
    {   
        if($val==1){//mantenimiento a equipo Asignado
            $equipoAsignado= $this->ofiTrabaEquiService->show($id);
            return view('admin.mantenimiento-adm.edit', compact('equipoAsignado'));
        }else{//mantenimiento a solicitud 
            $elements = $this->service->listar();
            return view('admin.mantenimiento-adm.index', compact('elements'));
        }
    }

    public function store(MantenimientoRequest $request)
    {
        $this->service->registrar($request);
        
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('mantenimiento-adm.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id_oficina)
    {
        $element = $this->service->editar($id_oficina);
        $sede= $this->sedeServ->listar()->pluck('no_sede','id_sede');
        return view('admin.mantenimiento-adm.edit', compact('element','sede'));
    }

    public function update(MantenimientoRequest $request, $id_oficina)
    {
        $this->service->actualizar($request, $id_oficina);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('mantenimiento-adm.index');
    }

    public function destroy($id)
    {
        $this->service->eliminar($id);
        return redirect()->route('mantenimiento-adm.index');
    }
}
