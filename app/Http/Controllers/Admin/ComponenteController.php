<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ComponenteService;
use App\Services\DocumentoService;
use App\Services\ImagenService;
use App\Http\Requests\ComponenteRequest; 
use App\Services\CategoriaComponenteService;
use Illuminate\Support\Facades\Auth;
use DB;
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
        if(Auth::user()->id_roles==1 || Auth::user()->id_roles==3){
            $elements = $this->service->listar();
            return view('admin.componentes-adm.index', compact('elements'));
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
        //
        $colaboradores=null;
        if(Auth::user()->id_roles==1 || Auth::user()->id_roles==3){
            $colaboradores =null;
            if(Auth::user()->id_roles==3){
                $colaboradores = DB::table('tm_colaborador')->where('tm_colaborador.id_roles',3)
                ->where('tm_colaborador.nu_documento',Auth::user()->nu_documento)
                ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_colaborador','=','tm_colaborador.id_colaborador')
                ->join('tm_sede','tm_sede.id_sede','=','tm_ofi_trabajador.id_sede')
                ->select('tm_colaborador.*','tm_sede.de_sede','tm_ofi_trabajador.id_ofi_trabajador')
                ->get();
            }
            else{
                $colaboradores = DB::table('tm_colaborador')->where('id_roles',3)
                ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_colaborador','=','tm_colaborador.id_colaborador')
                ->join('tm_sede','tm_sede.id_sede','=','tm_ofi_trabajador.id_sede')
                ->select('tm_colaborador.*','tm_sede.de_sede','tm_ofi_trabajador.id_ofi_trabajador')
                ->get();
            }
            $catCompo= $this->catCompoServ->listar()->pluck('des_cate_componentes','id_cat_componentes');
            return view('admin.componentes-adm.edit',compact('catCompo','colaboradores'));

    }else{
        return redirect()->route('panel');    }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComponenteRequest $request)
    {
        if(Auth::user()->id_roles==1 || Auth::user()->id_roles==3){
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('componente-adm.index');
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
        $colaboradores=null;
        if(Auth::user()->id_roles==1 || Auth::user()->id_roles==3){
            if(Auth::user()->id_roles==3){
                $colaboradores = DB::table('tm_colaborador')->where('tm_colaborador.id_roles',3)
                ->where('tm_colaborador.nu_documento',Auth::user()->nu_documento)
                ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_colaborador','=','tm_colaborador.id_colaborador')
                ->join('tm_sede','tm_sede.id_sede','=','tm_ofi_trabajador.id_sede')
                ->select('tm_colaborador.*','tm_sede.de_sede','tm_ofi_trabajador.id_ofi_trabajador')
                ->get();
            }
            else{
                $colaboradores = DB::table('tm_colaborador')->where('id_roles',3)
                ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_colaborador','=','tm_colaborador.id_colaborador')
                ->join('tm_sede','tm_sede.id_sede','=','tm_ofi_trabajador.id_sede')
                ->select('tm_colaborador.*','tm_sede.de_sede','tm_ofi_trabajador.id_ofi_trabajador')
                ->get();
            }
            
        $element = $this->service->editar($id_componente); 
        $documentos=$this->servDoc->getByComponente($id_componente);
        $imagenes=$this->servImg->getByComponente($id_componente);
        $catCompo= $this->catCompoServ->listar()->pluck('des_cate_componentes','id_cat_componentes');   
        return view('admin.componentes-adm.edit',compact('element','documentos','imagenes','catCompo','colaboradores'));
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
    public function update(ComponenteRequest $request, $id_componente)
    {
        //
        if(Auth::user()->id_roles==1 || Auth::user()->id_roles==3){
        $this->service->actualizar($request, $id_componente);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('componente-adm.index');
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
        //
        if(Auth::user()->id_roles==1 || Auth::user()->id_roles==3){
        $this->service->eliminar($id);
        return redirect()->route('componente-adm.index');
    }else{
        return redirect()->route('panel');    }
    }
}
