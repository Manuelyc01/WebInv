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
            
            switch($request->type){
                case 0://Imagenes equipo
                    $this->service->registrar($imgs,$request->id_equipo);
                    return back()->withInput();
                    break;
                case 1://Imagenes ofiTrabaEqui
                    $this->service->registrarOfiTraEqui($imgs,$request->id_ofi_traba_equipo);
                    return back()->withInput();
                    break;
                case 2://Imagenes solOficinaequipotra
                    $this->service->registrarFotoSolicitud($imgs,$request->id_soli_ofi_equi_tra);
                    return back()->withInput();
                    break;
            }
            
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

    public function destroy($id,$type)
    {
        $this->service->eliminar($id);
        switch($type){
            case 0://Imagenes equipo
                $element=$this->service->getById($id);
                $imgs=$this->service->getByEquipo($element->id_equipo);
                return response()->json($imgs);
                break;
            case 1://Imagenes ofiTrabaEqui
                $element=$this->service->getById($id);
                $imgs=$this->service->getByOfiTrabaEqui($element->id_ofi_traba_equipo);
                return response()->json($imgs);
                break;
            case 2://Imagenes solicitud trabajador equipo
                $element=$this->service->getById($id);
                $imgs=$this->service->getBySolOfiTrabaEqui($element->id_soli_ofi_equi_tra);
                return response()->json($imgs);
                break;
            case 3://Imagenes componentes
                break;
        }
        
    }
}