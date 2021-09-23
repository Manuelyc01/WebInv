<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ColaboradorService;
use App\Services\SedeService;
use App\Services\OficinaService;
use App\Services\CargoLaboralService;
use App\Services\OficinaTrabajadorService;  
use App\Http\Requests\OficinaTrabajadorRequest;
use App\Models\OficinaTrabajador;
use Illuminate\Support\Facades\Auth;

class OficinaTrabajadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(OficinaTrabajadorService $service,ColaboradorService $service1,SedeService $service2,OficinaService $service3,CargoLaboralService $service4)
    {
        $this->service = $service;
        $this->service1 = $service1;
        $this->service2 = $service2;
        $this->service3 = $service3;
        $this->service4 = $service4;
    }
    public function index()
    {
        //
        if(Auth::user()->tipo_usuario==1){
        $elements = $this->service->listar();
        //dd($elements->toArray());
        return view('admin.oficinaTrabajador-adm.index', compact('elements'));
        }else{
            $elements = $this->service->listarByColaborador(Auth::user()->id_colaborador);
            return view('admin.oficinaTrabajador-adm.index', compact('elements'));
        }
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
            $elements_colaboradores = $this->service1->listar();
            
            $elements_sede = $this->service2->listar();
            $elements_oficina = $this->service3->listar();
            $elements_cargoLaboral = $this->service4->listar();

            return view('admin.oficinaTrabajador-adm.edit',compact('elements_colaboradores','elements_sede','elements_oficina','elements_cargoLaboral'));
        }else{
            $elements = $this->service->listarByColaborador(Auth::user()->id_colaborador);
            return view('admin.oficinaTrabajador-adm.index', compact('elements'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OficinaTrabajadorRequest $request)
    {
        //
        if(Auth::user()->tipo_usuario==1){
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('oficinaTrabajador-adm.index');
        }else{
            $elements = $this->service->listarByColaborador(Auth::user()->id_colaborador);
            return view('admin.oficinaTrabajador-adm.index', compact('elements'));
        }
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
    public function edit($id_oficina_trabajador)
    {
        if(Auth::user()->tipo_usuario==1){
        //
        $element = $this->service->editar($id_oficina_trabajador);

        $elements_colaboradores = $this->service1->listar();
        $elements_sede = $this->service2->listar();
        $elements_cargoLaboral = $this->service4->listar();

        return view('admin.oficinaTrabajador-adm.edit', compact('element','elements_colaboradores','elements_sede','elements_cargoLaboral'));
    }else{
        $elements = $this->service->listarByColaborador(Auth::user()->id_colaborador);
        return view('admin.oficinaTrabajador-adm.index', compact('elements'));
    }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OficinaTrabajadorRequest $request, $id_oficina_trabajador)
    {
        //
        if(Auth::user()->tipo_usuario==1){
        $this->service->actualizar($request, $id_oficina_trabajador);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('oficinaTrabajador-adm.index');
    }else{
        $elements = $this->service->listarByColaborador(Auth::user()->id_colaborador);
        return view('admin.oficinaTrabajador-adm.index', compact('elements'));
    }
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
        return redirect()->route('oficinaTrabajador-adm.index');
    }else{
        $elements = $this->service->listarByColaborador(Auth::user()->id_colaborador);
        return view('admin.oficinaTrabajador-adm.index', compact('elements'));
    }
    }
}