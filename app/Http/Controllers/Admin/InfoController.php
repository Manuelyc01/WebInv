<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\InfoRequest;
use App\Http\Controllers\Controller;
use App\Services\Admin\InfoService;

class InfoController extends Controller
{
    private $service;

    public function __construct(InfoService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $element = $this->service->listar();
        $ddlActivarIdioma = $this->service->ddlActivarIdioma();

        if($element)
            return view('admin.info-adm.edit', compact('element', 'ddlActivarIdioma')); 

        return view('admin.info-adm.edit');
    }

    public function create()
    {
        //
    }

    public function store(InfoRequest $request)
    {
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('info-adm.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(InfoRequest $request, $id)
    {
        $this->service->actualizar($request, $id);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('info-adm.index');
    }

    public function destroy($id)
    {
        //
    }
}
