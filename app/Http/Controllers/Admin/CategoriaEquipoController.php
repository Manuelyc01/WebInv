<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\CategoriaEquipoService;
use App\Http\Requests\CategoriaEquipoRequest; 

class CategoriaEquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(CategoriaEquipoService $service)
    {
        $this->service = $service;
    }
    public function index()
    {
        //
        $elements = $this->service->listar();
        return view('admin.categoriaEquipo-adm.index', compact('elements'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.categoriaEquipo-adm.edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriaEquipoRequest $request)
    {
        //
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('categoriaEquipo-adm.index');
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
        $element = $this->service->editar($id_cat_equipos);
        return view('admin.categoriaEquipo-adm.edit', compact('element'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriaEquipoRequest $request, $id_oficina)
    {
        //
        $this->service->actualizar($request, $id_oficina);
        session()->flash('success', '¡Información actualizada con éxito!');
       
        return redirect()->route('categoriaEquipo-adm.index');
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
        return redirect()->route('categoriaEquipo-adm.index');
    }
}
