<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BannerClientesRequest;
use App\Http\Controllers\Controller;
use App\Services\Admin\BannerClientesService;

class BannerClientesController extends Controller
{
    private $service;

    public function __construct(BannerClientesService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $elements = $this->service->listar();
        return view('admin.bannercli-adm.index', compact('elements'));
    }

    public function create()
    {
        return view('admin.bannercli-adm.edit');
    }

    public function store(BannerClientesRequest $request)
    {
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('bannercli-adm.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $element = $this->service->editar($id);
        return view('admin.bannercli-adm.edit', compact('element'));
    }

    public function update(BannerClientesRequest $request, $id)
    {
        $this->service->actualizar($request, $id);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('bannercli-adm.index');
    }

    public function destroy($id)
    {
        $this->service->eliminar($id);
        return redirect()->route('bannercli-adm.index');
    }
}
