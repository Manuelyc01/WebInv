<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{Sede};

class SedesController extends Controller
{
   	public function sedes($slug)
    {
        $data['sedes'] = Sede::all();
        //dd($data['sedes']);
        $data['sede'] = Sede::whereTranslation('slug',$slug)->first();
        return view("web.sedes.sedes", compact('data'));
    }

}