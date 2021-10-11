<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MantenimientoRequest;
use App\Http\Controllers\Controller;
use App\Services\ColaboradorService;
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
    private $service1;
    public function __construct(MantenimientoService $service,ColaboradorService $service1,OfiTrabajadorEquipoService $ofiTrabaEquiService, ImagenService $servImg, DocumentoService $servDoc,SolOficinaEquipoTrabService $servSol)
    {
        $this->service = $service;
        $this->ofiTrabaEquiService = $ofiTrabaEquiService;
        $this->servImg = $servImg;
        $this->servDoc=$servDoc;
        $this->servSol=$servSol;
        $this->service1=$service1;
        
    }

    public function index()
    {
        $id=Auth::user()->id_colaborador;
        if(Auth::user()->tipo_usuario==3){
            $elements = $this->service->listarBySedeAdmin($id);
            return view('admin.mantenimiento-adm.index', compact('elements'));
        }
        if(Auth::user()->tipo_usuario==1){
        $elements = $this->service->listar();
        return view('admin.mantenimiento-adm.index', compact('elements'));
        }else{
            return redirect()->route('panel');    }
        
    }
    public function byEquiTrabaEqui($id)
    {   
        $idcol=Auth::user()->id_colaborador;
        if(Auth::user()->tipo_usuario==3){
            $x1=$this->ofiTrabaEquiService->show($id);
            $elements_sede = $this->service1->listarSedes($idcol);//sedes asignadas
            for($i=0;$i<count($elements_sede->toArray());$i++){
                if($x1->id_sede==$elements_sede[$i]->id_sede){
                    $elements = $this->service->listarByEquiTrabaEqui($id);
                    return view('admin.mantenimiento-adm.index', compact('elements','id'));
                }
            };
            return redirect()->route('panel');
        }
        if(Auth::user()->tipo_usuario==1){
            $elements = $this->service->listarByEquiTrabaEqui($id);
            return view('admin.mantenimiento-adm.index', compact('elements','id'));
        }else{
            return redirect()->route('panel');    }
    }
    public function bySolicitud($idsoli)
    {   
        $idcol=Auth::user()->id_colaborador;
        if(Auth::user()->tipo_usuario==3){
            $x1=$this->servSol->editar($idsoli);
            $elements_sede = $this->service1->listarSedes($idcol);//sedes asignadas
            for($i=0;$i<count($elements_sede->toArray());$i++){
                if($x1->id_sede==$elements_sede[$i]->id_sede){
                    $elements = $this->service->listarBySolicitud($idsoli);
                    return view('admin.mantenimiento-adm.index', compact('elements','idsoli'));
                }
            };
            return redirect()->route('panel');
        }
        if(Auth::user()->tipo_usuario==1){
            $elements = $this->service->listarBySolicitud($idsoli);
            return view('admin.mantenimiento-adm.index', compact('elements','idsoli'));
        }else{
            return redirect()->route('panel');    }
    }

    public function create($id,$val)
    {   
        $idcol=Auth::user()->id_colaborador;
        if(Auth::user()->tipo_usuario==3){
            if($val==0){//mantenimiento a equipo Asignado
                $equipoAsignado= $this->ofiTrabaEquiService->show($id);
                $elements_sede = $this->service1->listarSedes($idcol);//sedes asignadas
                for($i=0;$i<count($elements_sede->toArray());$i++){
                    if($equipoAsignado->id_sede==$elements_sede[$i]->id_sede){
                        return view('admin.mantenimiento-adm.edit', compact('equipoAsignado'));
                    }
                };
                return redirect()->route('panel');
            }else{//mantenimiento a solicitud 
                $x=$this->servSol->show($id);
                $equipoAsignado= $this->ofiTrabaEquiService->show($x->id_ofi_traba_equipo);
                $elements_sede = $this->service1->listarSedes($idcol);//sedes asignadas
                for($i=0;$i<count($elements_sede->toArray());$i++){
                    if($equipoAsignado->id_sede==$elements_sede[$i]->id_sede){
                        return view('admin.mantenimiento-adm.edit', compact('equipoAsignado','x'));
                    }
                };
                return redirect()->route('panel');
            }
        }
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
        
        $idcol=Auth::user()->id_colaborador;
        if(Auth::user()->tipo_usuario==3){
            if($request->soli==null){
                $equipoAsignado= $this->ofiTrabaEquiService->show($request->id_ofi_traba_equipo);
                $elements_sede = $this->service1->listarSedes($idcol);//sedes asignadas
                for($i=0;$i<count($elements_sede->toArray());$i++){
                    if($equipoAsignado->id_sede==$elements_sede[$i]->id_sede){
                        $this->service->registrar($request);
                        session()->flash('success', '¡Información registrada con éxito!');
                        return redirect('/web-adm/mantenimientos/'.$request->id_ofi_traba_equipo);
                    }
                };
                return redirect()->route('panel');
            }else{
                $x=$this->servSol->show($request->soli);
                $equipoAsignado= $this->ofiTrabaEquiService->show($x->id_ofi_traba_equipo);
                $elements_sede = $this->service1->listarSedes($idcol);//sedes asignadas
                for($i=0;$i<count($elements_sede->toArray());$i++){
                    if($equipoAsignado->id_sede==$elements_sede[$i]->id_sede){
                        $this->service->registrar($request);
                        session()->flash('success', '¡Información registrada con éxito!');
                        return redirect('/web-adm/mantenimientos/'.$request->id_ofi_traba_equipo);
                    }
                };
                return redirect()->route('panel');
            }
        }
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
        $colid=Auth::user()->id_colaborador;
        if(Auth::user()->tipo_usuario==3){
            $element = $this->service->editar($id_mantenimiento);
            $elements_sede = $this->service1->listarSedes($colid);//sedes asignadas
            for($i=0;$i<count($elements_sede->toArray());$i++){
                if($element->id_sede==$elements_sede[$i]->id_sede){
                    $documentos=$this->servDoc->getByMantenimiento($id_mantenimiento);
                    if($element->id_soli_ofi_equi_tra!=null){
                        $x=$element;
                        return view('admin.mantenimiento-adm.edit', compact('element','documentos','x'));
                    }
                    return view('admin.mantenimiento-adm.edit', compact('element','documentos'));
                }
            };
            return redirect()->route('panel'); 
        }
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
        $idcol=Auth::user()->id_colaborador;
        if(Auth::user()->tipo_usuario==3){
            $x1=$this->service->editar($id_oficina);//mantenimiento a editar
            if($x1->id_soli_ofi_equi_tra==null){
                $equipoAsignado= $this->ofiTrabaEquiService->show($x1->id_ofi_traba_equipo);
                $elements_sede = $this->service1->listarSedes($idcol);//sedes asignadas
                for($i=0;$i<count($elements_sede->toArray());$i++){
                    if($equipoAsignado->id_sede==$elements_sede[$i]->id_sede){
                        $idx=$this->service->actualizar($request, $id_oficina);
                        session()->flash('success', '¡Información actualizada con éxito!');
                        return redirect('/web-adm/mantenimientos/'.$idx->id_ofi_traba_equipo);
                    }
                };
                return redirect()->route('panel');
            }else{
                $x=$this->servSol->show($x1->id_soli_ofi_equi_tra);
                $equipoAsignado= $this->ofiTrabaEquiService->show($x->id_ofi_traba_equipo);
                $elements_sede = $this->service1->listarSedes($idcol);//sedes asignadas
                for($i=0;$i<count($elements_sede->toArray());$i++){
                    if($equipoAsignado->id_sede==$elements_sede[$i]->id_sede){
                        $idx=$this->service->actualizar($request, $id_oficina);
                        session()->flash('success', '¡Información actualizada con éxito!');
                        return redirect('/web-adm/mantenimientos/'.$idx->id_ofi_traba_equipo);
                    }
                };
                return redirect()->route('panel');
            }
        }
        if(Auth::user()->tipo_usuario==1 ){
            $idx=$this->service->actualizar($request, $id_oficina);
            session()->flash('success', '¡Información actualizada con éxito!');
            return redirect('/web-adm/mantenimientos/'.$idx->id_ofi_traba_equipo);
        }else{
            return redirect()->route('panel');    
        }
    }

    public function destroy($id)
    {
        $idcol=Auth::user()->id_colaborador;
        if(Auth::user()->tipo_usuario==3){
            $x1=$this->service->editar($id);//mantenimiento a editar
            if($x1->id_soli_ofi_equi_tra==null){
                $equipoAsignado= $this->ofiTrabaEquiService->show($x1->id_ofi_traba_equipo);
                $elements_sede = $this->service1->listarSedes($idcol);//sedes asignadas
                for($i=0;$i<count($elements_sede->toArray());$i++){
                    if($equipoAsignado->id_sede==$elements_sede[$i]->id_sede){
                        $idx=$this->service->eliminar($id);
                        return redirect('/web-adm/mantenimientos/'.$idx->id_ofi_traba_equipo);
                    }
                };
                return redirect()->route('panel');
            }else{
                $x=$this->servSol->show($x1->id_soli_ofi_equi_tra);
                $equipoAsignado= $this->ofiTrabaEquiService->show($x->id_ofi_traba_equipo);
                $elements_sede = $this->service1->listarSedes($idcol);//sedes asignadas
                for($i=0;$i<count($elements_sede->toArray());$i++){
                    if($equipoAsignado->id_sede==$elements_sede[$i]->id_sede){
                        $idx=$this->service->eliminar($id);
                        return redirect('/web-adm/mantenimientos/'.$idx->id_ofi_traba_equipo);
                    }
                };
                return redirect()->route('panel');
            }
        }
        if(Auth::user()->tipo_usuario==1 || Auth::user()->tipo_usuario==3){
            $idx=$this->service->eliminar($id);
            return redirect('/web-adm/mantenimientos/'.$idx->id_ofi_traba_equipo);
        }else{
            return redirect()->route('panel');    
        }
    }
    public function img($id){
        if(Auth::user()->tipo_usuario==1 || Auth::user()->tipo_usuario==3){
            $imagenes= $this->servImg->getByMantenimiento($id);
            $element=$this->service->editar($id);
            $type=3;
            return view('admin.mantenimiento-adm.imgs',compact('imagenes','element','type'));
        
        }else{
        return redirect()->route('panel');    
        }  
    }
}
