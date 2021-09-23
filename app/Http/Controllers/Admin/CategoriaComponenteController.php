<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\CategoriaComponenteService;
use App\Http\Requests\CategoriaComponenteRequest;
use Illuminate\Support\Facades\Auth;

class CategoriaComponenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(CategoriaComponenteService $service)
    {
        $this->service = $service;
    }
    public function index()
    {
        //
        if(Auth::user()->tipo_usuario==1){
        $elements = $this->service->listar();
        return view('admin.categoriaComponente-adm.index', compact('elements'));
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
        if(Auth::user()->tipo_usuario==1){
        return view('admin.categoriaComponente-adm.edit');
    }else{
        return redirect()->route('panel');    }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriaComponenteRequest $request)
    {
        //
        if(Auth::user()->tipo_usuario==1){
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('categoriaComponente-adm.index');
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
    public function edit($id_cat_componentes)
    {
        //
        if(Auth::user()->tipo_usuario==1){
        $element = $this->service->editar($id_cat_componentes);
        return view('admin.categoriaComponente-adm.edit', compact('element'));
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
    public function update(CategoriaComponenteRequest $request, $id_cat_componentes)
    {
        //
        if(Auth::user()->tipo_usuario==1){
        $this->service->actualizar($request, $id_cat_componentes);
        session()->flash('success', '¡Información actualizada con éxito!');
       
        return redirect()->route('categoriaComponente-adm.index');
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
        if(Auth::user()->tipo_usuario==1){
        $this->service->eliminar($id);
        return redirect()->route('categoriaComponente-adm.index');
    }else{
        return redirect()->route('panel');    }
    }
}
