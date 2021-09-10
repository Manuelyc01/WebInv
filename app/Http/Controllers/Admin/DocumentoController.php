<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\DocumentoService;

class DocumentoController extends Controller
{
    
    private $service;
    public function __construct(DocumentoService $service)
    {
        $this->service = $service;
    }
    //
    public function destroy($id,$type)
    {   
        $this->service->eliminar($id);
        switch($type){
            case 0://Imagenes equipo
                $element=$this->service->getById($id);
                $docs=$this->service->getByEquipo($element->id_equipo);
                return response()->json($docs);
                break;
            case 1://Imagenes ofiTrabaEqui
                $element=$this->service->getById($id);
                $imgs=$this->service->getByOfiTrabaEqui($element->id_ofi_traba_equipo);
                return response()->json($imgs);
                break;
            case 2://Documentos Solicitudes
                $element=$this->service->getById($id);
                $imgs=$this->service->getBySolOfiTrabaEqui($element->id_soli_ofi_equi_tra);
                return response()->json($imgs);
                break;
        }
        
    }
}