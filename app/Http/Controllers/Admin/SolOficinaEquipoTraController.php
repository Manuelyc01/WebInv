<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\OfiTrabajadorEquipoService;
use App\Services\SolOficinaEquipoTrabService;
use App\Services\SolicitudesService;
use App\Services\ImagenService;
use App\Services\DocumentoService;
use App\Http\Requests\SolOficinaEquipoTrabRequest;
use App\Services\ColaboradorService;
use App\Services\OficinaTrabajadorService;
use Illuminate\Support\Facades\Auth;

class SolOficinaEquipoTraController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function __construct(SolOficinaEquipoTrabService $service,SolicitudesService $service2,ImagenService $servImg, DocumentoService $servDoc, ColaboradorService $service1,OfiTrabajadorEquipoService $ofiTrabajador,OficinaTrabajadorService $servOfiTra)
    {
        $this->service = $service;
        $this->service2 = $service2;
        $this->servImg = $servImg; 
        $this->servDoc = $servDoc;
        $this->servOficina = $ofiTrabajador;
        $this->service1=$service1;
        $this->servOfiTra=$servOfiTra;
    }
    public function index()
    {
        if(Auth::user()->tipo_usuario==3){
            $elements = $this->service->listarBySedeAdmin(Auth::user()->id_colaborador);
            return view('admin.SolOficinaEquipoTrab-adm.index', compact('elements'));
        }
        if(Auth::user()->tipo_usuario==1){
            $elements = $this->service->listar();
            return view('admin.SolOficinaEquipoTrab-adm.index', compact('elements'));
        }else{
            return redirect()->route('panel');    }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->tipo_usuario==1){
            return redirect()->route('panel');//sin uso
        }else{
            return redirect()->route('panel');    
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SolOficinaEquipoTrabRequest $request)
    {
        if(Auth::user()->tipo_usuario==1){
            return redirect()->route('panel');// sin uso
        }else{
            return redirect()->route('panel');    
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::user()->tipo_usuario==1){
            $element = $this->service->mostrar($id); 
            //obtener imagenes
            $imagenes= $this->servImg->getBySolOfiTrabaEqui($id); 
            $documentos=$this->servDoc->getBySolOfiTrabaEqui($id);

            $equipotrajador = $this->service->mostrarEquipoTrajador($id);
            $trabajador = $this->service->mostrarTrabajador($id);
            $equipo = $this->service->mostrarEquipo($id);

            return view('admin.SolOficinaEquipoTrab-adm.show',compact('element','imagenes','documentos','equipotrajador','trabajador','equipo'));
        }else{
            return redirect()->route('panel');    }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        if(Auth::user()->tipo_usuario==3){
            
            $element = $this->service->editar($id);
            $ofi_traba=$this->servOfiTra->editar($element->id_ofi_trabajador);
            $colid=Auth::user()->id_colaborador;
            
            $elements_sede = $this->service1->listarSedes($colid);//sedes asignadas
            for($i=0;$i<count($elements_sede->toArray());$i++){
                if($ofi_traba->id_sede==$elements_sede[$i]->id_sede){
                    $elements_solicitud = $this->service2->listar();
                    $documentos=$this->servDoc->getBySolOfiTrabaEqui($id);
                    $elements_Colaborador = $this->servOficina->recuperar();
                    
                    $equipotrajador = $this->service->mostrarEquipoTrajador($id);
                    $trabajador = $this->service->mostrarTrabajador($id);
                    $equipo = $this->service->mostrarEquipo($id);
                    
                    return view('admin.SolOficinaEquipoTrab-adm.edit', compact('element', 'elements_solicitud','documentos','elements_Colaborador','equipotrajador','trabajador','equipo'));                               
                }
            };
            return redirect()->route('panel');
        }
        if(Auth::user()->tipo_usuario==1){
            $element = $this->service->editar($id);
            //dd($element);
            $elements_solicitud = $this->service2->listar();
            $documentos=$this->servDoc->getBySolOfiTrabaEqui($id);
            $elements_Colaborador = $this->servOficina->recuperar();
            
            $equipotrajador = $this->service->mostrarEquipoTrajador($id);
            $trabajador = $this->service->mostrarTrabajador($id);
            $equipo = $this->service->mostrarEquipo($id);
            
            return view('admin.SolOficinaEquipoTrab-adm.edit', compact('element', 'elements_solicitud','documentos','elements_Colaborador','equipotrajador','trabajador','equipo'));
        }else{
            return redirect()->route('panel');    }
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SolOficinaEquipoTrabRequest $request, $id_soli_ofi_equi_tra)
    {
        if(Auth::user()->tipo_usuario==3){
            $element = $this->service->editar($id_soli_ofi_equi_tra);
            $ofi_traba=$this->servOfiTra->editar($element->id_ofi_trabajador);
            $colid=Auth::user()->id_colaborador;
            
            $elements_sede = $this->service1->listarSedes($colid);//sedes asignadas
            for($i=0;$i<count($elements_sede->toArray());$i++){
                if($ofi_traba->id_sede==$elements_sede[$i]->id_sede){
                    $this->service->actualizar($request, $id_soli_ofi_equi_tra);
                    session()->flash('success', '¡Información actualizada con éxito!');
                    return redirect()->route('SolOficinaEquipoTrab-adm.index');
                }
            };
            return redirect()->route('panel');
        }
        if(Auth::user()->tipo_usuario==1){
            //dd("actualizar");
            $this->service->actualizar($request, $id_soli_ofi_equi_tra);
            session()->flash('success', '¡Información actualizada con éxito!');
        
            return redirect()->route('SolOficinaEquipoTrab-adm.index');
        }else{
            return redirect()->route('panel');    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->tipo_usuario==3){
            $element = $this->service->editar($id);
            $ofi_traba=$this->servOfiTra->editar($element->id_ofi_trabajador);
            $colid=Auth::user()->id_colaborador;
            
            $elements_sede = $this->service1->listarSedes($colid);//sedes asignadas
            for($i=0;$i<count($elements_sede->toArray());$i++){
                if($ofi_traba->id_sede==$elements_sede[$i]->id_sede){
                    $this->service->eliminar($id);
                    return redirect()->route('SolOficinaEquipoTrab-adm.index');
                }
            };
            return redirect()->route('panel');
        }
        if(Auth::user()->tipo_usuario==1){
            //
            $this->service->eliminar($id);
            return redirect()->route('SolOficinaEquipoTrab-adm.index');
        }else{
            return redirect()->route('panel');    }
    }

    public function img($id)
    {
        if(Auth::user()->tipo_usuario==1|| Auth::user()->tipo_usuario==3){
            $imagenes= $this->servImg->getBySolOfiTrabaEqui($id);
            $element=$this->service->show($id);
            //dd($element);
            $type=2;
            return view('admin.solOficinaEquipoTrab-adm.imgs',compact('imagenes','element','type'));
        }else{
            return redirect()->route('panel');    
        }
    }
    public function solRecibidos()
    {
        $id=Auth::user()->id_colaborador;
        if(Auth::user()->tipo_usuario==3){
            $elements=$this->service->recibidasAdmin($id);
           return view('admin.SolOficinaEquipoTrab-adm.index', compact('elements'));
        }
        if(Auth::user()->tipo_usuario==1){
           $elements=$this->service->recibidas();
           return view('admin.SolOficinaEquipoTrab-adm.index', compact('elements'));
        }else{
            return redirect()->route('panel');    
        }
    }
    public function solFinalizadas()
    {
        $id=Auth::user()->id_colaborador;
        if(Auth::user()->tipo_usuario==3){
            $elements=$this->service->finalizadosAdmin($id);
            return view('admin.SolOficinaEquipoTrab-adm.index', compact('elements'));
        }
        if(Auth::user()->tipo_usuario==1){
            $elements=$this->service->finalizados();
            return view('admin.SolOficinaEquipoTrab-adm.index', compact('elements'));
        }else{
            return redirect()->route('panel');    
        }
    }
    public function solProceso()
    {
        $id=Auth::user()->id_colaborador;
        if(Auth::user()->tipo_usuario==3){
            $elements=$this->service->procesoAdmin($id);
            return view('admin.SolOficinaEquipoTrab-adm.index', compact('elements'));
        }
        if(Auth::user()->tipo_usuario==1){
            $elements=$this->service->proceso();
            return view('admin.SolOficinaEquipoTrab-adm.index', compact('elements'));
        }else{
            return redirect()->route('panel');    
        }
    }

    public function pdf($id)
    {
            //dd($id);
            $element = $this->service->mostrar($id); 
            //obtener imagenes
            $imagenes= $this->servImg->getBySolOfiTrabaEqui($id); 
            $documentos=$this->servDoc->getBySolOfiTrabaEqui($id);

            $equipotrajador = $this->service->mostrarEquipoTrajador($id);
            $trabajador = $this->service->mostrarTrabajador($id);
            $equipo = $this->service->mostrarEquipo($id);

            return view('admin.solOficinaEquipoTrab-adm.pdf',compact('element','imagenes','documentos','equipotrajador','trabajador','equipo'));
    }
}