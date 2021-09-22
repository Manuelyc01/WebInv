<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\OfiTrabajadorEquipo;
use App\Http\Controllers\Controller;
use App\Services\OfiTrabajadorEquipoService;
use App\Services\ImagenService; 
use App\Services\DocumentoService; 
use App\Services\EquipoService; 
use App\Services\OficinaTrabajadorService; 

class OfiTrabajadorEquipoController extends Controller
{
    private $service;
    private $servImg;
    private $servDoc; 
    private $servEquipo;
    private $servOfiTra;

    public function __construct(OfiTrabajadorEquipoService $service,OficinaTrabajadorService $servOfiTra ,EquipoService $servEquipo,ImagenService $servImg, DocumentoService $servDoc)
    {
        $this->service = $service;
        $this->servEquipo=$servEquipo;
        $this->servImg = $servImg;
        $this->servDoc=$servDoc;
        $this->servOfiTra=$servOfiTra;
    }

    public function index()
    {
        $elements = $this->service->listar();
        return view('admin.ofiTrabajadorEquipo-adm.index', compact('elements'));
    }
    public function equiposTrab($id)
    {
        $elements = $this->service->listarByTrabajador($id);
        return view('admin.ofiTrabajadorEquipo-adm.index', compact('elements'));
    }
    public function equiposAsignados()
    {   
        $elements = $this->service->listarAsignados();
        return view('admin.ofiTrabajadorEquipo-adm.index', compact('elements'));
    }
    public function equiposNoAsignados()
    {   
        $elements = $this->service->listarNoAsignados();
        return view('admin.ofiTrabajadorEquipo-adm.index', compact('elements'));
    }
    public function equiposMantenmimiento()
    {   
        $elements = $this->service->listarMantenimiento();
        return view('admin.ofiTrabajadorEquipo-adm.index', compact('elements'));
    }

    public function create()
    { 
        $equipos=$this->servEquipo->listar();
        $trabajadores=$this->servOfiTra->listar();
        return view('admin.ofiTrabajadorEquipo-adm.edit',compact('equipos','trabajadores'));
    }

    public function store(OfiTrabajadorEquipo $request)
    {
        $stp=$this->service->registrar($request);
        
        if(isset($stp[0]->FALSE)){
            session()->flash('unsuccess', 'Fallo en registro!');//como enviar alerta
            return back()->withInput();    
        }
        else{
            session()->flash('success', '¡Información registrada con éxito!');
            return redirect()->route('ofiTrabajadorEquipo-adm.index');
        }
        
    }

    public function show($id)
    {
        $element = $this->service->show($id); 
        //obtener imagenes
        $imagenes= $this->servImg->getByOfiTrabaEqui($id); 
        $documentos=$this->servDoc->getByOfiTrabaEqui($id);
        return view('admin.ofiTrabajadorEquipo-adm.show',compact('element','imagenes','documentos'));
    }
    public function edit($id_oficina)
    {
            $element = $this->service->editar($id_oficina); 
            $documentos=$this->servDoc->getByOfiTrabaEqui($id_oficina);
            $equipos=$this->servEquipo->listar();
            $trabajadores=$this->servOfiTra->listar();
            return view('admin.ofiTrabajadorEquipo-adm.edit',compact('element','documentos','equipos','trabajadores'));   
    }

    public function update(OfiTrabajadorEquipo $request, $id_equipo)
    {
        $this->service->actualizar($request, $id_equipo);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('ofiTrabajadorEquipo-adm.index');
    }

    public function destroy($id)
    {
        $this->service->eliminar($id);
        return redirect()->route('ofiTrabajadorEquipo-adm.index');
    }
    public function transferir($id){
        $element = $this->service->editar($id); 
        $trabajadores=$this->servOfiTra->listar();
        return view('admin.ofiTrabajadorEquipo-adm.transf',compact('element','trabajadores'));
    }
    public function transferirRegister(OfiTrabajadorEquipo $request, $id){
        $e1 = $this->service->show($id); 
        if($request->id_ofi_trabajador==$e1->id_ofi_trabajador){//mismo colaborador
            return back()->withInput();  
        }
                $element= new OfiTrabajadorEquipo();
                $element->no_equipo=    $e1->no_equipo;
                $element->sis_operativo=    $e1->sis_operativo;
                $element->esta_ofi_traba_equipo=    1;
                $element->id_equipo=    $e1->id_equipo;

        $stp=$this->service->transferirEquipo($element,$request,$id);
        if(isset($stp[0]->FALSE)){
            session()->flash('unsuccess', 'Fallo en registro!');//como enviar alerta
            return back()->withInput();    
        }
        else{
            session()->flash('success', '¡Información registrada con éxito!');
            return redirect()->route('ofiTrabajadorEquipo-adm.index');
        }
    }
    public function img($id){
        $imagenes= $this->servImg->getByOfiTrabaEqui($id);
        $element=$this->service->show($id);
        $type=1;
        return view('admin.ofiTrabajadorEquipo-adm.imgs',compact('imagenes','element','type'));
    }
    
}