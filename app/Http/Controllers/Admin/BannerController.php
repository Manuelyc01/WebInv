<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BannerRequest;
use App\Http\Controllers\Controller;
use App\Services\Admin\BannerService;

class BannerController extends Controller
{
    private $service;

    public function __construct(BannerService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $elements = $this->service->listar();
        return view('admin.banner-adm.index', compact('elements'));
    }

    public function create()
    {
        return view('admin.banner-adm.edit');
    }

    public function store(BannerRequest $request)
    {
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('banner-adm.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $element = $this->service->editar($id);
        return view('admin.banner-adm.edit', compact('element'));
    }

    public function update(BannerRequest $request, $id)
    {
        $this->service->actualizar($request, $id);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('banner-adm.index');
    }

    public function destroy($id)
    {
        $this->service->eliminar($id);
        return redirect()->route('banner-adm.index');
    }
}
