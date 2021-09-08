<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ComponenteService;
use App\Services\DocumentoService;
use App\Services\ImagenService;
use App\Http\Requests\ComponenteRequest; 
use App\Services\CategoriaComponenteService; 

class ComponenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $servImg;
    private $servDoc;
    public function __construct(ComponenteService $service,CategoriaComponenteService $catCompoServ,ImagenService $servImg,DocumentoService $servDoc)
    {
        $this->service = $service;
        $this->catCompoServ = $catCompoServ;
        $this->servImg = $servImg;
        $this->servDoc=$servDoc;
    }
    public function index()
    {
        //
        $elements = $this->service->listar();
        return view('admin.componentes-adm.index', compact('elements'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $catCompo= $this->catCompoServ->listar()->pluck('des_cate_componentes','id_cat_componentes');
        return view('admin.componentes-adm.edit',compact('catCompo'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComponenteRequest $request)
    {
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('componente-adm.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_componente)
    {
        //
        $element = $this->service->editar($id_componente); 
        $documentos=$this->servDoc->getByComponente($id_componente);
        $imagenes=$this->servImg->getByComponente($id_componente);
        $catCompo= $this->catCompoServ->listar()->pluck('des_cate_componentes','id_cat_componentes');   
        return view('admin.componentes-adm.edit',compact('element','documentos','imagenes','catCompo'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ComponenteRequest $request, $id_componente)
    {
        //
        $this->service->actualizar($request, $id_componente);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('componente-adm.index');
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
        return redirect()->route('componente-adm.index');
    }
}
