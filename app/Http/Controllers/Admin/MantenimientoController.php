<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MantenimientoRequest;
use App\Http\Controllers\Controller;
use App\Services\MantenimientoService;
use App\Services\OfiTrabajadorEquipoService;
use App\Services\ImagenService; 
use App\Services\DocumentoService; 

class MantenimientoController extends Controller
{
    private $service;
    private $servImg;
    private $servDoc; 

    public function __construct(MantenimientoService $service,OfiTrabajadorEquipoService $ofiTrabaEquiService, ImagenService $servImg, DocumentoService $servDoc)
    {
        $this->service = $service;
        $this->ofiTrabaEquiService = $ofiTrabaEquiService;
        $this->servImg = $servImg;
        $this->servDoc=$servDoc;
        
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
        return redirect('/web-adm/mantenimientos/'.$request->id_ofi_traba_equipo);
    }

    public function show($id)
    {
        //
    }

    public function edit($id_mantenimiento)
    {
        $element = $this->service->editar($id_mantenimiento);
        $documentos=$this->servDoc->getByMantenimiento($id_mantenimiento);
        return view('admin.mantenimiento-adm.edit', compact('element','documentos'));
    }

    public function update(MantenimientoRequest $request, $id_oficina)
    {
        $idx=$this->service->actualizar($request, $id_oficina);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect('/web-adm/mantenimientos/'.$idx->id_ofi_traba_equipo);
    }

    public function destroy($id)
    {
        $idx=$this->service->eliminar($id);
        return redirect('/web-adm/mantenimientos/'.$idx->id_ofi_traba_equipo);
    }
    public function img($id){
        $imagenes= $this->servImg->getByMantenimiento($id);
        $element=$this->service->editar($id);
        $type=2;
        return view('admin.mantenimiento-adm.imgs',compact('imagenes','element','type'));
    }
}
