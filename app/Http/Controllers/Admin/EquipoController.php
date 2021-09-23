<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EquipoRequest;
use App\Http\Controllers\Controller;
use App\Services\EquipoService;
use App\Services\CategoriaEquipoService; 
use App\Services\ImagenService; 
use App\Services\DocumentoService;
use Illuminate\Support\Facades\Auth;

class EquipoController extends Controller
{
    private $service;
    private $servImg;
    private $servDoc;

    public function __construct(EquipoService $service,ImagenService $servImg,CategoriaEquipoService $catEquiServ, DocumentoService $servDoc)
    {
        $this->service = $service;
        $this->servImg = $servImg;
        $this->catEquiServ = $catEquiServ;
        $this->servDoc=$servDoc;
    }

    public function index()
    {
        if(Auth::user()->tipo_usuario==1){

        $elements = $this->service->listar();
        return view('admin.equipo-adm.index', compact('elements'));
    }else{
        return redirect()->route('panel');    }
    }

    public function create()
    { 
        if(Auth::user()->tipo_usuario==1){

        $catEqui= $this->catEquiServ->listar()->pluck('des_cate_equipo','id_cat_equipos');
        return view('admin.equipo-adm.edit',compact('catEqui'));
    }else{
        return redirect()->route('panel');    }
    }

    public function store(EquipoRequest $request)
    {
        if(Auth::user()->tipo_usuario==1){

        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('equipo-adm.index');
    }else{
        return redirect()->route('panel');    }
    }

    public function show($id)
    {
        if(Auth::user()->tipo_usuario==1){

        $element = $this->service->show($id); 
        //obtener imagenes
        $imagenes= $this->servImg->getByEquipo($id); 
        $documentos=$this->servDoc->getByEquipo($id);

        $catEqui= $this->catEquiServ->editar($element->id_cat_equipos);
        return view('admin.equipo-adm.show',compact('element','imagenes','documentos','catEqui'));
    }else{
        return redirect()->route('panel');    }
    }
    public function edit($id_oficina)
    {
        if(Auth::user()->tipo_usuario==1){

        $element = $this->service->editar($id_oficina); 
        $documentos=$this->servDoc->getByEquipo($id_oficina);
        $catEqui= $this->catEquiServ->listar()->pluck('des_cate_equipo','id_cat_equipos');   
        return view('admin.equipo-adm.edit',compact('element','documentos','catEqui'));
    }else{
        return redirect()->route('panel');    }
    }

    public function update(EquipoRequest $request, $id_equipo)
    {
        if(Auth::user()->tipo_usuario==1){

        $this->service->actualizar($request, $id_equipo);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('equipo-adm.index');
    }else{
        return redirect()->route('panel');    }
    }

    public function destroy($id)
    {
        if(Auth::user()->tipo_usuario==1){

        $this->service->eliminar($id);
        return redirect()->route('equipo-adm.index');
    }else{
        return redirect()->route('panel');    }
    }
    public function img($id){
        if(Auth::user()->tipo_usuario==1){

        $imagenes= $this->servImg->getByEquipo($id);
        $element=$this->service->show($id);
        $type=0;
        return view('admin.equipo-adm.imgs',compact('imagenes','element','type'));
    }else{
        return redirect()->route('panel');    }
    }
}