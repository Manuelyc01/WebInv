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
    public function destroy($id)
    {   
        $this->service->eliminar($id);
        $element=$this->service->getById($id);
        $docs=$this->service->getByEquipo($element->id_equipo);
        return response()->json($docs);
    }
}