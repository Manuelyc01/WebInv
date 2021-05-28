<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\IndustrialBannerRequest;
use App\Http\Controllers\Controller;
use App\Services\Admin\IndustrialBannerService;

class IndustrialBannerController extends Controller
{
    private $service;

    public function __construct(IndustrialBannerService $service)
    {
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $elements = $this->service->listar();
        
        if($elements)
            return view('admin.industrial-banner-adm.index', compact('elements')); 

        return view('admin.industrial-banner-adm.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.industrial-banner-adm.edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IndustrialBannerRequest $request)
    {
        //
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('industrial-banner-adm.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $element = $this->service->editar($id);
        return view('admin.industrial-banner-adm.edit', compact('element'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IndustrialBannerRequest $request, $id)
    {
        //
        $this->service->actualizar($request, $id);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('industrial-banner-adm.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->service->eliminar($id);
        return redirect()->route('industrial-banner-adm.index');
    }
}
