<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{Historia, Equipo, Integrante};

class NosotrosController extends Controller
{
   	public function historia()
    {
        $data['historia'] = Historia::first();
        $data['linea'] = $array = collect($data['historia']->arrayB3)->sortBy('tx1A')->reverse()->toArray();
        return view("web.nosotros.historia", compact('data'));
    }

    public function equipo()
    {
        $data['equipo'] = Equipo::first();
        $data['integrantes'] = Integrante::orderBy('orden', 'DESC')->get();
        return view("web.nosotros.equipo", compact('data'));
    }    

}