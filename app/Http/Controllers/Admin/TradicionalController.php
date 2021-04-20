<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TradicionalRequest;
use App\Http\Controllers\Controller;
use App\Services\Admin\TradicionalService;

class TradicionalController extends Controller
{
    private $service;

    public function __construct(TradicionalService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $element = $this->service->listar();

        if($element)
            return view('admin.tradicional-adm.edit', compact('element')); 

        return view('admin.tradicional-adm.edit');
    }

    public function create()
    {
        //
    }

    public function store(TradicionalRequest $request)
    {
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('tradicional-adm.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(TradicionalRequest $request, $id)
    {
        $this->service->actualizar($request, $id);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('tradicional-adm.index');
    }

    public function destroy($id)
    {
        //
    }
}
