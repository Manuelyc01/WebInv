<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CargoLaboralRequest;
use App\Http\Controllers\Controller;
use App\Services\CargoLaboralService;
use Illuminate\Support\Facades\Auth;

class CargoLaboralController extends Controller
{
    //
    private $service;

    public function __construct(CargoLaboralService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        if(Auth::user()->tipo_usuario==1){

        $elements = $this->service->listar();
        return view('admin.cargoLaboral-adm.index', compact('elements'));
    }else{
        return redirect()->route('panel');    
    }
    }

    public function create()
    {
        if(Auth::user()->tipo_usuario==1){

        return view('admin.cargoLaboral-adm.edit');
    }else{
        return redirect()->route('panel');    }
    }

    public function store(CargoLaboralRequest $request)
    {
        if(Auth::user()->tipo_usuario==1){

        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('cargoLaboral-adm.index');
    }else{
        return redirect()->route('panel');    }
    }

    public function show($id)
    {
        //
    }

    public function edit($id_oficina)
    {
        if(Auth::user()->tipo_usuario==1){

        $element = $this->service->editar($id_oficina);
        return view('admin.cargoLaboral-adm.edit', compact('element'));
    }else{
        return redirect()->route('panel');    }
    }

    public function update(CargoLaboralRequest $request, $id_oficina)
    {
        if(Auth::user()->tipo_usuario==1){

        $this->service->actualizar($request, $id_oficina);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('cargoLaboral-adm.index');
    }else{
        return redirect()->route('panel');    }
    }

    public function destroy($id)
    {
        if(Auth::user()->tipo_usuario==1){
        $this->service->eliminar($id);
        return redirect()->route('cargoLaboral-adm.index');
    }else{
        return redirect()->route('panel');    }
    }
}
