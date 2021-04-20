<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TipoDenunciaRequest;
use App\Http\Controllers\Controller;
use App\Services\Admin\TipoDenunciaService;

class TipoDenunciaController extends Controller
{
    private $service;

    public function __construct(TipoDenunciaService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $elements = $this->service->listar();
        return view('admin.tipo-denuncia-adm.index', compact('elements'));
    }

    public function create()
    {
        return view('admin.tipo-denuncia-adm.edit');
    }

    public function store(TipoDenunciaRequest $request)
    {
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('tipo-denuncia-adm.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $element = $this->service->editar($id);
        return view('admin.tipo-denuncia-adm.edit', compact('element'));
    }

    public function update(TipoDenunciaRequest $request, $id)
    {
        $this->service->actualizar($request, $id);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('tipo-denuncia-adm.index');
    }

    public function destroy($id)
    {
        $this->service->eliminar($id);
        return redirect()->route('tipo-denuncia-adm.index');
    }
}
