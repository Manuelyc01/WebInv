<?php

namespace App\Services\Admin;

use App\Models\Niveles;

class NivelesService
{
    public function listar()
	{
        $element = Niveles::all();
		return $element;
	}

	public function registrar($request)
	{
        $element = Niveles::create($request->only(			
            'nombre'
		));

		$element->save();
    }
    
    public function editar($id)
    {
        $element = Niveles::find($id);
		return $element;
    }

	public function actualizar($request, $id)
	{
        $element = Niveles::find($id);
		$element->fill($request->only(			
            'nombre'
		), $id);
		
		$element->save();
	}

	public function eliminar($id)
	{
		Niveles::destroy($id);
	}

	
}