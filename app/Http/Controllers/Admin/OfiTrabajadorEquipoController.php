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
        $imagenes= $this->servImg->getByEquipo($id); 
        $documentos=$this->servDoc->getByEquipo($id);

        $catEqui= $this->catEquiServ->editar($element->id_cat_equipos);
        return view('admin.equipo-adm.show',compact('element','imagenes','documentos','catEqui'));
    }
    public function edit($id_oficina)
    {
        $element = $this->service->editar($id_oficina); 
        $documentos=$this->servDoc->getByEquipo($id_oficina);
        $catEqui= $this->catEquiServ->listar()->pluck('des_cate_equipo','id_cat_equipos');   
        return view('admin.equipo-adm.edit',compact('element','documentos','catEqui'));
    }

    public function update(OfiTrabajadorEquipo $request, $id_equipo)
    {
        $this->service->actualizar($request, $id_equipo);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('equipo-adm.index');
    }

    public function destroy($id)
    {
        $this->service->eliminar($id);
        return redirect()->route('equipo-adm.index');
    }
    public function img($id){
        $imagenes= $this->servImg->getByEquipo($id);
        $element=$this->service->show($id);
        return view('admin.equipo-adm.imgs',compact('imagenes','element'));
    }
}