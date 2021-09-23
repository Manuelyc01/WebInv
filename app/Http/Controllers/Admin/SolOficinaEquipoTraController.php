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
use Illuminate\Support\Facades\Auth;

class SolOficinaEquipoTraController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function __construct(SolOficinaEquipoTrabService $service,SolicitudesService $service2,ImagenService $servImg, DocumentoService $servDoc, OfiTrabajadorEquipoService $ofiTrabajador)
    {
        $this->service = $service;
        $this->service2 = $service2;
        $this->servImg = $servImg; 
        $this->servDoc = $servDoc;
        $this->servOficina = $ofiTrabajador;
    }
    public function index()
    {
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
            $elements_solicitud = $this->service2->listar();
            $elements_Colaborador = $this->servOficina->recuperar();
            return view('admin.SolOficinaEquipoTrab-adm.edit',compact('elements_solicitud','elements_Colaborador'));
        }else{
            return redirect()->route('panel');    }
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
            $this->service->registrar($request);
            
            session()->flash('success', '¡Información registrada con éxito!');
            return redirect()->route('SolOficinaEquipoTrab-adm.index');
        }else{
            return redirect()->route('panel');    }
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
        if(Auth::user()->tipo_usuario==1){
            //
            $this->service->eliminar($id);
            return redirect()->route('SolOficinaEquipoTrab-adm.index');
        }else{
            return redirect()->route('panel');    }
    }

    public function img($id)
    {
        if(Auth::user()->tipo_usuario==1){
            $imagenes= $this->servImg->getBySolOfiTrabaEqui($id);
            $element=$this->service->show($id);
            //dd($element);
            $type=2;
            return view('admin.solOficinaEquipoTrab-adm.imgs',compact('imagenes','element','type'));
        }else{
            return redirect()->route('panel');    
        }
    }
}