<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Services\OfiTrabajadorEquipoService;
use DB;

class OfiTrabajadorEquipoAjax extends Controller
{
    private $service;

    public function __construct(OfiTrabajadorEquipoService $service)
    {
        $this->service = $service;
    }
    public function VerificarEquipo($id)
    {
        $element=$this->service->verificarEquipo($id);
        
        return response()->json($element);
        
    }
}