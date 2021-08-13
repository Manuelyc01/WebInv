<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class OfinicaTrabajadorAjaxController extends Controller
{
    //
    public function GetOficinaAjax($sede )
    {
        $oficinas=DB::table('tm_oficina')
            ->join('tm_sede','tm_sede.id_sede','=','tm_oficina.id_sede')
            ->select('tm_oficina.*')
            ->where('tm_sede.co_sede',$sede)
            ->get();
        return response()->json($oficinas);
    }
    public function VerificarTrabajador($colaborador,$sede,$oficina,$cargo_laboral )
    {
       
        @$id_sede=DB::table('tm_sede')->where('co_sede','LIKE','%'.$sede.'%')->first()->id_sede;
        @$id_oficina=DB::table('tm_oficina')->where('co_oficina','LIKE','%'.$oficina.'%')->first()->id_oficina;
        @$id_cargo_laboral=DB::table('tm_cargo_laboral')->where('co_cargo_laboral','LIKE','%'.$cargo_laboral.'%')->first()->id_cargo_laboral;
        @$id_colaborador=DB::table('tm_colaborador')->where('co_colaborador','LIKE','%'.$colaborador.'%')->first()->id_colaborador;
        

        @$oficinas=DB::table('tm_ofi_trabajador')
            ->where('tm_ofi_trabajador.id_oficina',@$id_oficina)
            ->where('tm_ofi_trabajador.id_cargo_laboral',@$id_cargo_laboral)
            ->where('tm_ofi_trabajador.id_sede',@$id_sede)
            ->where('tm_ofi_trabajador.id_colaborador',@$id_colaborador)
            ->first();
        if(isset($oficinas->id_ofi_trabajador)==true){
            return response()->json('si');
        }
        else{
            return response()->json('no');
        }
    }
}