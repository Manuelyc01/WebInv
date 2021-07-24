<?php

namespace App\Services;

use App\Models\OficinaTrabajador;

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
        $element= new Oficina();
        
        $element->id_sede=$request->get('id_sede');
        $element->co_oficina=$request->get('co_oficina');
        $element->no_oficina=$request->get('no_oficina');
        $element->de_oficina=$request->get('de_oficina');
          
        $element->save();
    }
    
    public function editar($id_oficina)
    {
        $element = Oficina::find($id_oficina);
        return $element;
    }

	public function actualizar($request, $id_oficina)
	{
        
        $element = Oficina::find($id_oficina);

        $element->id_sede=$request->get('id_sede');
        $element->co_oficina=$request->get('co_oficina');
        $element->no_oficina=$request->get('no_oficina');
        $element->de_oficina=$request->get('de_oficina');
          
        $element->save();
	}

	public function eliminar($id)
	{
        Oficina::destroy($id);
	}

	
}