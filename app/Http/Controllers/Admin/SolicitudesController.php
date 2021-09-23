<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\SolicitudesService;
use App\Http\Requests\SolicitudesRequest;
use Illuminate\Support\Facades\Auth;

class SolicitudesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(SolicitudesService $service)
    {
        $this->service = $service;
    }
    public function index()
    {
        //
        if(Auth::user()->tipo_usuario==1){
        $elements = $this->service->listar();
        return view('admin.solicitudes-adm.index', compact('elements'));
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
        return view('admin.solicitudes-adm.edit');
    }else{
        return redirect()->route('panel');    }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SolicitudesRequest $request)
    {
        //
        if(Auth::user()->tipo_usuario==1){
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('solicitudes-adm.index');
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
    public function edit($id_cat_equipos)
    {
        //
        if(Auth::user()->tipo_usuario==1){
        $element = $this->service->editar($id_cat_equipos);
        return view('admin.solicitudes-adm.edit', compact('element'));
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
    public function update(SolicitudesRequest $request, $id_oficina)
    {
        //
        if(Auth::user()->tipo_usuario==1){
        $this->service->actualizar($request, $id_oficina);
        session()->flash('success', '¡Información actualizada con éxito!');
       
        return redirect()->route('solicitudes-adm.index');
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
        return redirect()->route('solicitudes-adm.index');
    }else{
        return redirect()->route('panel');    }
    
    }
}
