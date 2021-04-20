<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\IndustrialRequest;
use App\Http\Controllers\Controller;
use App\Services\Admin\IndustrialService;

class IndustrialController extends Controller
{
    private $service;

    public function __construct(IndustrialService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $element = $this->service->listar();

        if($element)
            return view('admin.industrial-adm.edit', compact('element')); 

        return view('admin.industrial-adm.edit');
    }

    public function create()
    {
        //
    }

    public function store(IndustrialRequest $request)
    {
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('industrial-adm.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(IndustrialRequest $request, $id)
    {
        $this->service->actualizar($request, $id);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('industrial-adm.index');
    }

    public function destroy($id)
    {
        //
    }
}
