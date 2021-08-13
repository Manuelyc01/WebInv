<?php

namespace App\Services;

use App\Models\OficinaTrabajador;
use DB;
class OficinaTrabajadorService
{
        public function listar()
	{
                $element = OficinaTrabajador::join('tm_sede', 'tm_sede.id_sede', '=', 'tm_ofi_trabajador.id_sede')
                        ->join('tm_oficina','tm_oficina.id_oficina','=','tm_ofi_trabajador.id_oficina')
                        ->join('tm_cargo_laboral','tm_cargo_laboral.id_cargo_laboral','=','tm_ofi_trabajador.id_cargo_laboral')
                        ->join('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')
                        ->select('tm_ofi_trabajador.*','tm_sede.no_sede','tm_oficina.no_oficina','tm_cargo_laboral.no_cargo_laboral','tm_colaborador.*',)
                        ->orderBy('tm_ofi_trabajador.id_ofi_trabajador', 'ASC')->get();
                        return $element;
	}

        public function registrar($request)
        {
                $element= new OficinaTrabajador();

                $id_sede=DB::table('tm_sede')->where('co_sede',$request->get('co_sede'))->first()->id_sede;
                $id_oficina=DB::table('tm_oficina')->where('co_oficina',$request->get('co_oficina'))->first()->id_oficina;
                $id_cargo_laboral=DB::table('tm_cargo_laboral')->where('co_cargo_laboral',$request->get('co_cargo_laboral'))->first()->id_cargo_laboral;
                $id_colaborador=DB::table('tm_colaborador')->where('co_colaborador',$request->get('co_colaborador'))->first()->id_colaborador;
                
                $element->id_sede=$id_sede;
                $element->id_cargo_laboral=$id_cargo_laboral;
                $element->id_colaborador=$id_colaborador;
                $element->id_oficina=$id_oficina;
                $element->est_trabajador=$request->get('estado_trabajaor');
                
                $element->save();
        }
    
        public function editar($id_oficina_trabajador)
        {
                $element = OficinaTrabajador::join('tm_sede', 'tm_sede.id_sede', '=', 'tm_ofi_trabajador.id_sede')
                        ->join('tm_oficina','tm_oficina.id_oficina','=','tm_ofi_trabajador.id_oficina')
                        ->join('tm_cargo_laboral','tm_cargo_laboral.id_cargo_laboral','=','tm_ofi_trabajador.id_cargo_laboral')
                        ->join('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')
                        ->select('tm_ofi_trabajador.*','tm_sede.co_sede','tm_oficina.co_oficina','tm_oficina.no_oficina','tm_cargo_laboral.co_cargo_laboral','tm_colaborador.*',)
                        ->where('tm_ofi_trabajador.id_ofi_trabajador', $id_oficina_trabajador)
                        ->first();
                return $element;
        }

	public function actualizar($request, $id_oficina_trabajador)
	{
                $element = OficinaTrabajador::find($id_oficina_trabajador);
                $id_sede=DB::table('tm_sede')->where('co_sede',$request->get('co_sede'))->first()->id_sede;
                $id_oficina=DB::table('tm_oficina')->where('co_oficina',$request->get('co_oficina'))->first()->id_oficina;
                $id_cargo_laboral=DB::table('tm_cargo_laboral')->where('co_cargo_laboral',$request->get('co_cargo_laboral'))->first()->id_cargo_laboral;
                $id_colaborador=DB::table('tm_colaborador')->where('co_colaborador',$request->get('co_colaborador'))->first()->id_colaborador;

                $element->id_sede=$id_sede;
                $element->id_cargo_laboral=$id_cargo_laboral;
                $element->id_colaborador=$id_colaborador;
                $element->id_oficina=$id_oficina;
                $element->est_trabajador=$request->get('estado_trabajaor');

                
                $element->save();
	}

	public function eliminar($id)
	{
                OficinaTrabajador::destroy($id);
	}

	
}