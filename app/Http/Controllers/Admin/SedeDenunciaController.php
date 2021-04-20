<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SedeDenunciaRequest;
use App\Http\Controllers\Controller;
use App\Services\Admin\SedeDenunciaService;

class SedeDenunciaController extends Controller
{
    private $service;

    public function __construct(SedeDenunciaService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $elements = $this->service->listar();
        return view('admin.sede-denuncia-adm.index', compact('elements'));
    }

    public function create()
    {
        return view('admin.sede-denuncia-adm.edit');
    }

    public function store(SedeDenunciaRequest $request)
    {
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('sede-denuncia-adm.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $element = $this->service->editar($id);
        return view('admin.sede-denuncia-adm.edit', compact('element'));
    }

    public function update(SedeDenunciaRequest $request, $id)
    {
        $this->service->actualizar($request, $id);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('sede-denuncia-adm.index');
    }

    public function destroy($id)
    {
        $this->service->eliminar($id);
        return redirect()->route('sede-denuncia-adm.index');
    }
}
