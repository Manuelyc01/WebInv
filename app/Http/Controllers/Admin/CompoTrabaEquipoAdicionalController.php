<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ComponenteTrabajadorEquipoService;
use App\Http\Requests\ComponenteTrabajadorEquipoRequest;
use App\Models\ComponenteTrabajadorEquipo;
use App\Models\Componente;
use App\Services\ColaboradorService;
use DB;
use App\Services\ImagenService; 
use App\Services\DocumentoService;
use App\Services\OfiTrabajadorEquipoService;
use Illuminate\Support\Facades\Auth;

class CompoTrabaEquipoAdicionalController extends Controller
{
    private $service;
    private $servImg;
    private $servDoc;
    private $ofiTraEqui;
    private $service1;
    public function __construct(OfiTrabajadorEquipoService $ofiTraEqui,ColaboradorService $service1,ComponenteTrabajadorEquipoService $service,ImagenService $servImg,DocumentoService $servDoc)
    {
        $this->service = $service;
        $this->servImg = $servImg;
        $this->servDoc=$servDoc;
        $this->ofiTraEqui=$ofiTraEqui;
        $this->service1=$service1;
    }
    public function ListarEquiCompoEqTrab($id_ofi_equi_trabajador)
    {
        $id=Auth::user()->id_colaborador;
        $tipo=Auth::user()->id_roles;
        switch($tipo){
            case 1:
                $elements = $this->service->listar($id_ofi_equi_trabajador);
                return view('admin.componenteTrabajadorEquipo-adm.index', compact('elements','id_ofi_equi_trabajador'));
                break;
            case 3;
                $x1=$this->ofiTraEqui->show($id_ofi_equi_trabajador);
                $elements_sede = $this->service1->listarSedes($id);//sedes asignadas
                for($i=0;$i<count($elements_sede->toArray());$i++){
                    if($x1->id_sede==$elements_sede[$i]->id_sede){
                        $elements = $this->service->listar($id_ofi_equi_trabajador);
                        return view('admin.componenteTrabajadorEquipo-adm.index', compact('elements','id_ofi_equi_trabajador'));             
                    }
                };
                return redirect()->route('ofiTrabajadorEquipo-adm.index');
                break;
        }
        return redirect()->route('ofiTrabajadorEquipo-adm.index');
    }
    public function CrearEquiCompoEqTrab($id_ofi_equi_trabajador)
    {
        $id=Auth::user()->id_colaborador;
        $tipo=Auth::user()->id_roles;
        switch($tipo){
            case 1:
                $elements = Componente::where('esta_componente',1)->get();
                return view('admin.componenteTrabajadorEquipo-adm.edit', compact('elements','id_ofi_equi_trabajador'));
                break;
            case 3;
                $x1=$this->ofiTraEqui->show($id_ofi_equi_trabajador);
                $elements_sede = $this->service1->listarSedes($id);//sedes asignadas
                for($i=0;$i<count($elements_sede->toArray());$i++){
                    if($x1->id_sede==$elements_sede[$i]->id_sede){
                        $elements = Componente::where('esta_componente',1)->get();
                        return view('admin.componenteTrabajadorEquipo-adm.edit', compact('elements','id_ofi_equi_trabajador'));
                    }
                };
                return redirect()->route('ofiTrabajadorEquipo-adm.index');
                break;
        }
        return redirect()->route('ofiTrabajadorEquipo-adm.index');
    }
    public function StoreEquiCompoEqTrab(ComponenteTrabajadorEquipoRequest $request)
    {
        $id_ofi_equi_trabajador=$request->get('id_ofi_traba_equipo');
        $id=Auth::user()->id_colaborador;
        $tipo=Auth::user()->id_roles;
        switch($tipo){
            case 1:
                $this->service->registrar($request);        
                session()->flash('success', '¡Información registrada con éxito!');
                return redirect()->route('componenteTrabajadorEquipo-adm.index',$id_ofi_equi_trabajador);
                break;
            case 3;
                $x1=$this->ofiTraEqui->show($id_ofi_equi_trabajador);
                $elements_sede = $this->service1->listarSedes($id);//sedes asignadas
                for($i=0;$i<count($elements_sede->toArray());$i++){
                    if($x1->id_sede==$elements_sede[$i]->id_sede){
                        $this->service->registrar($request);
                        session()->flash('success', '¡Información registrada con éxito!');
                        return redirect()->route('componenteTrabajadorEquipo-adm.index',$id_ofi_equi_trabajador);  
                    }
                };
                return redirect()->route('ofiTrabajadorEquipo-adm.index');
                break;
        }
        return redirect()->route('ofiTrabajadorEquipo-adm.index');
    }
    public function EditarEquiCompoEqTrab($id_ofi_traba_equi_compo,$id_ofi_equi_trabajador)
    {
        $id=Auth::user()->id_colaborador;
        $tipo=Auth::user()->id_roles;
        switch($tipo){
            case 1:
                $elementsCoEquiTraba = $this->service->editar($id_ofi_traba_equi_compo);
                $elements = Componente::where('esta_componente',1)->get();
                $imagenes= $this->servImg->getByOfiTrabaEquiCompo($id_ofi_traba_equi_compo); 
                $documentos=$this->servDoc->getByOfiTrabaEquiCompo($id_ofi_traba_equi_compo);
                return view('admin.componenteTrabajadorEquipo-adm.edit', compact('elements','id_ofi_equi_trabajador','elementsCoEquiTraba','imagenes','documentos'));
                break;
            case 3;
                $x1=$this->ofiTraEqui->show($id_ofi_equi_trabajador);
                $elements_sede = $this->service1->listarSedes($id);//sedes asignadas
                for($i=0;$i<count($elements_sede->toArray());$i++){
                    if($x1->id_sede==$elements_sede[$i]->id_sede){
                        $elementsCoEquiTraba = $this->service->editar($id_ofi_traba_equi_compo);
                        $elements = Componente::where('esta_componente',1)->get();
                        $imagenes= $this->servImg->getByOfiTrabaEquiCompo($id_ofi_traba_equi_compo); 
                        $documentos=$this->servDoc->getByOfiTrabaEquiCompo($id_ofi_traba_equi_compo);
                        return view('admin.componenteTrabajadorEquipo-adm.edit', compact('elements','id_ofi_equi_trabajador','elementsCoEquiTraba','imagenes','documentos'));
                    }
                };
                return redirect()->route('ofiTrabajadorEquipo-adm.index');
                break;
        }
        return redirect()->route('ofiTrabajadorEquipo-adm.index');
    }
    public function UpdateEquiCompoEqTrab(ComponenteTrabajadorEquipoRequest $request,$id_ofi_traba_equi_compo)
    {
        $id_ofi_equi_trabajador=$request->get('id_ofi_traba_equipo');
        $id=Auth::user()->id_colaborador;
        $tipo=Auth::user()->id_roles;
        switch($tipo){
            case 1:
                    $this->service->actualizar($request, $id_ofi_traba_equi_compo);        
                    session()->flash('success', '¡Información actualizada con éxito!');
                    return redirect()->route('componenteTrabajadorEquipo-adm.index',$id_ofi_equi_trabajador);
                    break;
            case 3;
                $x1=$this->ofiTraEqui->show($id_ofi_equi_trabajador);
                $elements_sede = $this->service1->listarSedes($id);//sedes asignadas
                for($i=0;$i<count($elements_sede->toArray());$i++){
                    if($x1->id_sede==$elements_sede[$i]->id_sede){
                        $ $this->service->actualizar($request, $id_ofi_traba_equi_compo);        
                        session()->flash('success', '¡Información actualizada con éxito!');
                        return redirect()->route('componenteTrabajadorEquipo-adm.index',$id_ofi_equi_trabajador);
                    }
                };
                return redirect()->route('ofiTrabajadorEquipo-adm.index');
                break;
        }
        return redirect()->route('ofiTrabajadorEquipo-adm.index');
    }
    public function DestroyEquiCompoEqTrab($id_ofi_traba_equi_compo)
    {
        $id=Auth::user()->id_colaborador;
        $tipo=Auth::user()->id_roles;
        switch($tipo){
            case 1:
                $this->service->eliminar($id_ofi_traba_equi_compo);
                $id_ofi_equi_trabajador=ComponenteTrabajadorEquipo::find($id_ofi_traba_equi_compo)->id_ofi_traba_equipo;
                
                return redirect()->route('componenteTrabajadorEquipo-adm.index',$id_ofi_equi_trabajador);
                    break;
            case 3;
                $x=$this->service->editar($id_ofi_traba_equi_compo);
                $x1=$this->ofiTraEqui->show($x->id_ofi_traba_equipo);
                $elements_sede = $this->service1->listarSedes($id);//sedes asignadas
                for($i=0;$i<count($elements_sede->toArray());$i++){
                    if($x1->id_sede==$elements_sede[$i]->id_sede){
                        $this->service->eliminar($id_ofi_traba_equi_compo);
                        $id_ofi_equi_trabajador=ComponenteTrabajadorEquipo::find($id_ofi_traba_equi_compo)->id_ofi_traba_equipo;
                        return redirect()->route('componenteTrabajadorEquipo-adm.index',$id_ofi_equi_trabajador);
                    }
                };
                return redirect()->route('ofiTrabajadorEquipo-adm.index');
                break;
        }
        return redirect()->route('ofiTrabajadorEquipo-adm.index');
        
    }
}