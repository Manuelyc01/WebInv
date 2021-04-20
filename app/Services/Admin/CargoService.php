<?php

namespace App\Services\Admin;

use App\Models\Cargo;

class CargoService
{
    public function listar()
	{
        $element = Cargo::all();
		return $element;
	}

	public function registrar($request)
	{
        $locale = app()->getLocale();
        $locale == 'es' ? $newLocale = 'en' : $newLocale = 'es';

        $element = Cargo::create();

		$element->translateOrNew($locale)->nombre = $request->nombre;
		$element->translateOrNew($newLocale)->nombre = $request->nombre;

		$element->save();
    }
    
    public function editar($id)
    {
        $element = Cargo::find($id);
		return $element;
    }

	public function actualizar($request, $id)
	{
        $locale = app()->getLocale();
        
        $element = Cargo::find($id);		

		$element->translateOrNew($locale)->nombre = $request->nombre;
		
		$element->save();
	}

	public function eliminar($id)
	{
		Cargo::destroy($id);
	}

	
}