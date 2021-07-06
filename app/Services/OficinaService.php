<?php

namespace App\Services;

use App\Models\Oficina;

class OficinaService
{
    public function listar()
	{
        $element = Oficina::orderBy('id_oficina', 'ASC')->get();
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