<?php

namespace App\Services\Admin;

use App\Models\{GestionNivel3, GestionNivel2};

class GestionNivel3Service
{
    public function listar()
	{
        $element = GestionNivel3::all();
		return $element;
	}

	public function registrar($request)
	{
        $locale = app()->getLocale();
        $locale == 'es' ? $newLocale = 'en' : $newLocale = 'es';

        $element = GestionNivel3::create($request->only(			
            'gestion_nivel2_id'
		));

		$element->translateOrNew($locale)->nombre = $request->nombre;
        $element->translateOrNew($newLocale)->nombre = $request->nombre;

		$element->save();
    }
    
    public function editar($id)
    {
        $element = GestionNivel3::find($id);
		return $element;
    }

	public function actualizar($request, $id)
	{
        $locale = app()->getLocale();
        
		$element = GestionNivel3::find($id);
		$element->fill($request->only(			
            'gestion_nivel2_id'
		), $id);		

		$element->translateOrNew($locale)->nombre = $request->nombre;
		
		$element->save();
	}

	public function eliminar($id)
	{
		GestionNivel3::destroy($id);
    }
    
    public function ddlGestionNivel2()
	{
		$items = GestionNivel2::All();
        $array = array();
        $array[0] = '-- seleccione --';
		foreach ($items as $c) {
			$c->titulo ? $value = $c->titulo : $value = '-';
			$array[$c->id] = $value;
		}
        return $array;
	}

	
}