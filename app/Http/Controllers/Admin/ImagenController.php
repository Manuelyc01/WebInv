<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ImagenRequest;
use App\Http\Controllers\Controller;
use App\Services\EquipoService;; 
use App\Services\ImagenService; 

class ImagenController extends Controller
{
    private $service;
    private $equiposerv;

    public function __construct(ImagenService $service,EquipoService $equiposerv)
    {
        $this->service = $service;
        $this->equiposerv = $equiposerv;
    
    }

    public function index()
    {
    }

    public function create()
    { 
    }

    public function store(ImagenRequest $request)
    {
        if($request->hasfile('imagenes')){
            $imgs = $request->file('imagenes');
            $this->service->registrar($imgs,$request->id_equipo);
            return back()->withInput();
         }
        return back()->withInput();
    }

    public function show($id)
    {

    }
    public function edit($id_oficina)
    {

    }

    public function update($request, $id_equipo)
    {
    }

    public function destroy($id)
    {
        $this->service->eliminar($id);
        $element=$this->service->getById($id);
        $imgs=$this->service->getByEquipo($element->id_equipo);
        return response()->json($imgs);
    }
}