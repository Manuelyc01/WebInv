<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ComponenteTrabajadorEquipoService;
use App\Http\Requests\ComponenteTrabajadorEquipoRequest;
use App\Models\Componente;
use DB;
use App\Services\ImagenService; 
use App\Services\DocumentoService; 
class CompoTrabaEquipoAdicionalController extends Controller
{
    private $service;
    private $servImg;
    private $servDoc;
    public function __construct(ComponenteTrabajadorEquipoService $service,ImagenService $servImg,DocumentoService $servDoc)
    {
        $this->service = $service;
        $this->servImg = $servImg;
        $this->servDoc=$servDoc;
    }
    public function ListarEquiCompoEqTrab($id_ofi_equi_trabajador)
    {
        $elements = $this->service->listar($id_ofi_equi_trabajador);
        return view('admin.componenteTrabajadorEquipo-adm.index', compact('elements','id_ofi_equi_trabajador'));
    }
    public function CrearEquiCompoEqTrab($id_ofi_equi_trabajador)
    {
        $elements = Componente::where('esta_componente',1)->get();
        return view('admin.componenteTrabajadorEquipo-adm.edit', compact('elements','id_ofi_equi_trabajador'));
    }
    public function StoreEquiCompoEqTrab(ComponenteTrabajadorEquipoRequest $request)
    {
        $this->service->registrar($request);
        $id_ofi_equi_trabajador=$request->get('id_ofi_traba_equipo');

        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('componenteTrabajadorEquipo-adm.index',$id_ofi_equi_trabajador);
    }
    public function EditarEquiCompoEqTrab($id_ofi_traba_equi_compo,$id_ofi_equi_trabajador)
    {
        $elementsCoEquiTraba = $this->service->editar($id_ofi_traba_equi_compo);
        $elements = Componente::where('esta_componente',1)->get();
        $imagenes= $this->servImg->getByOfiTrabaEquiCompo($id_ofi_traba_equi_compo); 
        $documentos=$this->servDoc->getByOfiTrabaEquiCompo($id_ofi_traba_equi_compo);
        return view('admin.componenteTrabajadorEquipo-adm.edit', compact('elements','id_ofi_equi_trabajador','elementsCoEquiTraba','imagenes','documentos'));
    }
    public function UpdateEquiCompoEqTrab(ComponenteTrabajadorEquipoRequest $request,$id_ofi_traba_equi_compo)
    {
        $this->service->actualizar($request, $id_ofi_traba_equi_compo);
        $id_ofi_equi_trabajador=$request->get('id_ofi_traba_equipo');
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('componenteTrabajadorEquipo-adm.index',$id_ofi_equi_trabajador);
    }
    public function DestroyEquiCompoEqTrab(ComponenteTrabajadorEquipoRequest $request,$id_ofi_traba_equi_compo)
    {
    }
}