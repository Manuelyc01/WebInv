<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\OfiTrabajadorEquipoService;
use App\Services\SolOficinaEquipoTrabUserService;
use App\Services\SolicitudesService;
use App\Services\ImagenService;
use App\Services\DocumentoService;
use App\Services\OficinaTrabajadorService;
use App\Http\Requests\SolOficinaEquipoTrabUserRequest; 

class SolOficinaEquipoTraUserController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function __construct(SolOficinaEquipoTrabUserService $service,SolicitudesService $service2,ImagenService $servImg, DocumentoService $servDoc, OfiTrabajadorEquipoService $ofiTrabajador, OficinaTrabajadorService $Trabajador)
    {
        $this->service = $service;
        $this->service2 = $service2;
        $this->servImg = $servImg;
        $this->servDoc = $servDoc;
        $this->servOficina = $ofiTrabajador;
        $this->servTrabajador = $Trabajador;
    }
    public function index()
    {
    
        //$elements = $this->service->listar();
        
        $User=auth()->user()->id_colaborador;
        //dd($User);
        //$elements= $this->service->recuperarUser($User);
        $elements= $this->service->recuperarUserT($User);
        //DD($elements);
        return view('admin.SolOficinaEquipoTrabUser-adm.index', compact('elements'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $elements_solicitud = $this->service2->listar();
      
        $User=auth()->user()->id_colaborador;

        $validacion = $this->servOficina->validarOfiTrabajadorEquipo($User);
        $Usuario=$this->servOficina->recuperarOfiTrabajadorEquipo($User);//id_ofi_trab_equipo
        //dd($validacion);
        //dd($Usuario->id_ofi_trab_equipo);
        $Trabajador=$this->servTrabajador->recuperarOfiTrabajador($User);//id_ofi_trabajador
        //dd($Trabajador);
        if($validacion==null)
        {
        
            return view('admin.SolOficinaEquipoTrabUser-adm.edit',compact('elements_solicitud','Trabajador'));
        }
        else
        {
            return view('admin.SolOficinaEquipoTrabUser-adm.edit',compact('elements_solicitud','validacion','Usuario'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SolOficinaEquipoTrabUserRequest $request)
    {
       
        $this->service->registrar($request);
        
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('SolOficinaEquipoTrabUser-adm.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $element = $this->service->mostrar($id); 
        //obtener imagenes
        $imagenes= $this->servImg->getBySolOfiTrabaEqui($id); 
        $documentos=$this->servDoc->getBySolOfiTrabaEqui($id);
        return view('admin.SolOficinaEquipoTrabUser-adm.show',compact('element','imagenes','documentos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $element = $this->service->editar($id);
        //dd($element);
        $elements_solicitud = $this->service2->listar();
        $documentos=$this->servDoc->getBySolOfiTrabaEqui($id);
        $elements_Colaborador = $this->servOficina->recuperar();
        return view('admin.SolOficinaEquipoTrabUser-adm.edit', compact('element', 'elements_solicitud','documentos','elements_Colaborador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SolOficinaEquipoTrabUserRequest $request, $id_soli_ofi_equi_tra)
    {
        
        //dd("actualizar");
        $this->service->actualizar($request, $id_soli_ofi_equi_tra);
        session()->flash('success', '¡Información actualizada con éxito!');
       
        return redirect()->route('SolOficinaEquipoTrabUser-adm.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $this->service->eliminar($id);
        return redirect()->route('SolOficinaEquipoTrabUser-adm.index');
    }

    public function img($id)
    {
        $imagenes= $this->servImg->getBySolOfiTrabaEqui($id);
        $element=$this->service->show($id);
        //dd($element);
        $type=2;
        return view('admin.solOficinaEquipoTrabUser-adm.imgs',compact('imagenes','element','type'));
    }
}