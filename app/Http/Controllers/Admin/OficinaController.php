<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\OficinaRequest;
use App\Http\Controllers\Controller;
use App\Services\OficinaService; 
use App\Services\SedeService;
use Illuminate\Support\Facades\Auth;

class OficinaController extends Controller
{
    private $service;

    public function __construct(OficinaService $service,SedeService $sedeServ)
    {
        $this->service = $service;
        $this->sedeServ= $sedeServ;
    }

    public function index()
    {
        if(Auth::user()->id_roles==1|| Auth::user()->id_roles==3){
        $elements = $this->service->listar();
        return view('admin.oficina-adm.index', compact('elements'));
        }else{
            return redirect()->route('panel');        }
    }

    public function create()
    {
        if(Auth::user()->id_roles==1){
        $sede= $this->sedeServ->listar()->pluck('no_sede','id_sede');
        return view('admin.oficina-adm.edit', compact('sede'));
        }else{
            return redirect()->route('panel');        }
    }

    public function store(OficinaRequest $request)
    {
        if(Auth::user()->id_roles==1){
        $this->service->registrar($request);  
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('oficina-adm.index');
        }else{
            return redirect()->route('panel');        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id_oficina)
    {
        if(Auth::user()->id_roles==1){
        $element = $this->service->editar($id_oficina);
        $sede= $this->sedeServ->listar()->pluck('no_sede','id_sede');
        return view('admin.oficina-adm.edit', compact('element','sede'));
        }else{
            return redirect()->route('panel');        }
    }

    public function update(OficinaRequest $request, $id_oficina)
    {
        if(Auth::user()->id_roles==1){
        $this->service->actualizar($request, $id_oficina);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('oficina-adm.index');
        }else{
            return redirect()->route('panel');        }
    }

    public function destroy($id)
    {
        if(Auth::user()->id_roles==1){
        $this->service->eliminar($id);
        return redirect()->route('oficina-adm.index');
        }else{
            return redirect()->route('panel');        }
    }
}
