<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MantenimientoRequest;
use App\Http\Controllers\Controller;
use App\Services\MantenimientoService;
use App\Services\OfiTrabajadorEquipoService;
use App\Services\ImagenService; 
use App\Services\DocumentoService;
use App\Services\SolOficinaEquipoTrabService;
use Illuminate\Support\Facades\Auth;

class MantenimientoController extends Controller
{
    private $service;
    private $servImg;
    private $servDoc; 
    private $servSol;
    public function __construct(MantenimientoService $service,OfiTrabajadorEquipoService $ofiTrabaEquiService, ImagenService $servImg, DocumentoService $servDoc,SolOficinaEquipoTrabService $servSol)
    {
        $this->service = $service;
        $this->ofiTrabaEquiService = $ofiTrabaEquiService;
        $this->servImg = $servImg;
        $this->servDoc=$servDoc;
        $this->servSol=$servSol;
        
    }

    public function index()
    {
        if(Auth::user()->tipo_usuario==1){
        $elements = $this->service->listar();
        return view('admin.mantenimiento-adm.index', compact('elements'));
        }else{
            return redirect()->route('panel');    }
        
    }
    public function byEquiTrabaEqui($id)
    {   
        if(Auth::user()->tipo_usuario==1){
            $elements = $this->service->listarByEquiTrabaEqui($id);
            return view('admin.mantenimiento-adm.index', compact('elements','id'));
        }else{
            return redirect()->route('panel');    }
    }

    public function create($id,$val)
    {   
        if(Auth::user()->tipo_usuario==1){
        if($val==0){//mantenimiento a equipo Asignado
            $equipoAsignado= $this->ofiTrabaEquiService->show($id);
            return view('admin.mantenimiento-adm.edit', compact('equipoAsignado'));
        }else{//mantenimiento a solicitud 
            $x=$this->servSol->show($id);
            $equipoAsignado= $this->ofiTrabaEquiService->show($x->id_ofi_traba_equipo);
            return view('admin.mantenimiento-adm.edit', compact('equipoAsignado','x'));
        }
        }else{
            return redirect()->route('panel');    
        }
    }

    public function store(MantenimientoRequest $request)
    {
        if(Auth::user()->tipo_usuario==1){
            $this->service->registrar($request);
            
            session()->flash('success', '¡Información registrada con éxito!');
            return redirect('/web-adm/mantenimientos/'.$request->id_ofi_traba_equipo);
        }else{
            return redirect()->route('panel');    
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id_mantenimiento)
    {
        if(Auth::user()->tipo_usuario==1){
            $element = $this->service->editar($id_mantenimiento);
            $documentos=$this->servDoc->getByMantenimiento($id_mantenimiento);
            if($element->id_soli_ofi_equi_tra!=null){
                $x=$element;
                return view('admin.mantenimiento-adm.edit', compact('element','documentos','x'));
            }
            return view('admin.mantenimiento-adm.edit', compact('element','documentos'));
        }else{
            return redirect()->route('panel');    
        }   
    }

    public function update(MantenimientoRequest $request, $id_oficina)
    {
        if(Auth::user()->tipo_usuario==1){
            $idx=$this->service->actualizar($request, $id_oficina);
            session()->flash('success', '¡Información actualizada con éxito!');
            return redirect('/web-adm/mantenimientos/'.$idx->id_ofi_traba_equipo);
        }else{
            return redirect()->route('panel');    
        }
    }

    public function destroy($id)
    {
        if(Auth::user()->tipo_usuario==1){
            $idx=$this->service->eliminar($id);
            return redirect('/web-adm/mantenimientos/'.$idx->id_ofi_traba_equipo);
        }else{
            return redirect()->route('panel');    
        }
    }
    public function img($id){
        if(Auth::user()->tipo_usuario==1){
            $imagenes= $this->servImg->getByMantenimiento($id);
            $element=$this->service->editar($id);
            $type=3;
            return view('admin.mantenimiento-adm.imgs',compact('imagenes','element','type'));
        
        }else{
        return redirect()->route('panel');    
        }  
    }
}
