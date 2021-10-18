<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SedeRequest;
use App\Http\Controllers\Controller;
use App\Services\SedeService;
use Illuminate\Support\Facades\Auth;

class SedeController extends Controller
{
    private $service;

    public function __construct(SedeService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        if(Auth::user()->tipo_usuario==1|| Auth::user()->tipo_usuario==3){
        $elements = $this->service->listar();
        return view('admin.sede-adm.index', compact('elements'));
        }else{
            return redirect()->route('panel');        }
    }

    public function create()
    {
        if(Auth::user()->tipo_usuario==1){
        return view('admin.sede-adm.edit');
    }else{
        return redirect()->route('panel');    }
    }

    public function store(SedeRequest $request)
    {
        if(Auth::user()->tipo_usuario==1){
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('sede-adm.index');
    }else{
        return redirect()->route('panel');    }
    }

    public function show($id)
    {
        //
    }

    public function edit($id_sede)
    {
        if(Auth::user()->tipo_usuario==1){
        $element = $this->service->editar($id_sede);
        return view('admin.sede-adm.edit', compact('element'));
    }else{
        return redirect()->route('panel');    }
    }

    public function update(SedeRequest $request, $id_sede)
    {
        if(Auth::user()->tipo_usuario==1){
        $this->service->actualizar($request, $id_sede);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('sede-adm.index');
    }else{
        return redirect()->route('panel');    }
    }

    public function destroy($id)
    {
        if(Auth::user()->tipo_usuario==1){
        $this->service->eliminar($id);
        return redirect()->route('sede-adm.index');
    }else{
        return redirect()->route('panel');    }
    }
}