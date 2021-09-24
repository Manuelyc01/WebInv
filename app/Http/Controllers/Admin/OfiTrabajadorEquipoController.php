<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\OfiTrabajadorEquipo;
use App\Http\Controllers\Controller;
use App\Services\ComponenteTrabajadorEquipoService;
use App\Services\OfiTrabajadorEquipoService;
use App\Services\ImagenService; 
use App\Services\DocumentoService; 
use App\Services\EquipoService;
use App\Services\MantenimientoService;
use App\Services\OficinaTrabajadorService;
use Illuminate\Support\Facades\Auth;

class OfiTrabajadorEquipoController extends Controller
{
    private $service;
    private $servImg;
    private $servDoc; 
    private $servEquipo;
    private $servOfiTra;
    private $mantServ;
    private $compoServ;

    public function __construct(ComponenteTrabajadorEquipoService $compoServ,OfiTrabajadorEquipoService $service,MantenimientoService $mantServ,OficinaTrabajadorService $servOfiTra ,EquipoService $servEquipo,ImagenService $servImg, DocumentoService $servDoc)
    {
        $this->service = $service;
        $this->servEquipo=$servEquipo;
        $this->servImg = $servImg;
        $this->servDoc=$servDoc;
        $this->servOfiTra=$servOfiTra;
        $this->mantServ=$mantServ;
        $this->compoServ=$compoServ;
    }

    public function index()
    {
        if(Auth::user()->tipo_usuario==1){
            
        $elements = $this->service->listar();
        return view('admin.ofiTrabajadorEquipo-adm.index', compact('elements'));
    
        }else{
            return redirect('/web-adm/trabEquipos/'.Auth::user()->id_colaborador);
        }
    }
    public function equiposTrab($id)
    {
        if(Auth::user()->tipo_usuario==1){
        $elements = $this->service->listarByTrabajador($id);
        return view('admin.ofiTrabajadorEquipo-adm.index', compact('elements'));
        }else{
            $x1=$this->servOfiTra->editar($id);
            if($x1->id_colaborador!=Auth::user()->id_colaborador){
                return redirect('/web-adm/oficinaTrabajador-adm');
            }else{
                $elements = $this->service->listarByTrabajador($id);
                return view('admin.ofiTrabajadorEquipo-adm.index', compact('elements'));
            }
        }
    }
    public function equiposAsignados()
    {   
        if(Auth::user()->tipo_usuario==1){
        $elements = $this->service->listarAsignados();
        return view('admin.ofiTrabajadorEquipo-adm.index', compact('elements'));
        }else{
            return redirect()->route('panel');    
    }
    }
    public function equiposNoAsignados()
    {   
        if(Auth::user()->tipo_usuario==1){
        $elements = $this->service->listarNoAsignados();
        return view('admin.ofiTrabajadorEquipo-adm.index', compact('elements'));
    }else{
        return redirect()->route('panel');    
}
    }
    public function equiposMantenmimiento()
    {   
        if(Auth::user()->tipo_usuario==1){
        $elements = $this->service->listarMantenimiento();
        return view('admin.ofiTrabajadorEquipo-adm.index', compact('elements'));
    }else{
        return redirect()->route('panel');    
}
    }
    public function create()
    { 
        if(Auth::user()->tipo_usuario==1){
            $equipos=$this->servEquipo->listarDisponibles();
            $trabajadores=$this->servOfiTra->listar();
            return view('admin.ofiTrabajadorEquipo-adm.edit',compact('equipos','trabajadores'));
        }else{
            return redirect()->route('panel');
        }
    }
    public function store(OfiTrabajadorEquipo $request)
    {
        if(Auth::user()->tipo_usuario==1){
        $stp=$this->service->registrar($request);
        
        if(isset($stp[0]->FALSE)){
            session()->flash('unsuccess', 'Fallo en registro!');//como enviar alerta
            return back()->withInput();    
        }
        else{
            session()->flash('success', '¡Información registrada con éxito!');
            return redirect()->route('ofiTrabajadorEquipo-adm.index');
        }
    }else{
        return redirect()->route('panel');
    }
    }
    public function show($id)
    {
        if(Auth::user()->tipo_usuario==1){
            $element = $this->service->show($id); 
            //obtener imagenes
            $imagenes= $this->servImg->getByOfiTrabaEqui($id); 
            $documentos=$this->servDoc->getByOfiTrabaEqui($id);
            //obtener mantenimientos
            $mantenimientos=$this->mantServ->listarByEquiTrabaEqui($id);
            //obtener componentes
            $compos=$this->compoServ->listar($id);
            return view('admin.ofiTrabajadorEquipo-adm.show',compact('element','imagenes','documentos','mantenimientos','compos'));
            
        }else{
            $x1=$this->service->show($id);
            if($x1->id_colaborador!=Auth::user()->id_colaborador){
                return redirect('web-adm/oficinaTrabajador-adm');
            }else{
                    $element = $this->service->show($id); 
                    //obtener imagenes
                    $imagenes= $this->servImg->getByOfiTrabaEqui($id); 
                    $documentos=$this->servDoc->getByOfiTrabaEqui($id);
                    //obtener mantenimientos
                    $mantenimientos=$this->mantServ->listarByEquiTrabaEqui($id);
                    //obtener componentes
                    $compos=$this->compoServ->listar($id);
                    return view('admin.ofiTrabajadorEquipo-adm.show',compact('element','imagenes','documentos','mantenimientos','compos'));
                }
        }
    }
    public function edit($id_oficina)
    {
        if(Auth::user()->tipo_usuario==1){
            $element = $this->service->editar($id_oficina); 
            $documentos=$this->servDoc->getByOfiTrabaEqui($id_oficina);
            $equipos=$this->servEquipo->listar();
            $trabajadores=$this->servOfiTra->listar();
            return view('admin.ofiTrabajadorEquipo-adm.edit',compact('element','documentos','equipos','trabajadores'));   
        }else{
            return redirect('web-adm/oficinaTrabajador-adm');
        }
    }

    public function update(OfiTrabajadorEquipo $request, $id_equipo)
    {
        if(Auth::user()->tipo_usuario==1){
        $this->service->actualizar($request, $id_equipo);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('ofiTrabajadorEquipo-adm.index');
    }else{
        return redirect('web-adm/oficinaTrabajador-adm');
    }
    }

    public function destroy($id)
    {
        if(Auth::user()->tipo_usuario==1){
        $this->service->eliminar($id);
        return redirect()->route('ofiTrabajadorEquipo-adm.index');
        }else{
            return redirect('web-adm/oficinaTrabajador-adm');
        }
    }
    public function transferir($id){
        if(Auth::user()->tipo_usuario==1){
            $element = $this->service->editar($id); 
            $trabajadores=$this->servOfiTra->listar();
            return view('admin.ofiTrabajadorEquipo-adm.transf',compact('element','trabajadores'));
        }else{
            return redirect('web-adm/oficinaTrabajador-adm');
        }
    }
    public function transferirRegister(OfiTrabajadorEquipo $request, $id){
        if(Auth::user()->tipo_usuario==1){
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
        }else{
            return redirect('web-adm/oficinaTrabajador-adm');
        }
    }
    public function img($id){
        if(Auth::user()->tipo_usuario==1){
            $imagenes= $this->servImg->getByOfiTrabaEqui($id);
            $element=$this->service->show($id);
            $type=1;
            return view('admin.ofiTrabajadorEquipo-adm.imgs',compact('imagenes','element','type'));
        }else{
            return redirect('web-adm/oficinaTrabajador-adm');
        }
        }
    
}