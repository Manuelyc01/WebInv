<?php

namespace App\Services\Admin;

use App\Models\GestionNivel1;

class GestionNivel1Service
{
    public function listar()
	{
        $element = GestionNivel1::orderBy('orden', 'ASC')->get();
		return $element;
	}

	public function registrar($request)
	{
        $locale = app()->getLocale();
        $locale == 'es' ? $newLocale = 'en' : $newLocale = 'es';

        $element = GestionNivel1::create($request->only(			
            'orden'
		));

		$element->translateOrNew($locale)->nombre = $request->nombre;
        $element->translateOrNew($newLocale)->nombre = $request->nombre;

		$element->save();
    }
    
    public function editar($id)
    {
        $element = GestionNivel1::find($id);
		return $element;
    }

	public function actualizar($request, $id)
	{
        $locale = app()->getLocale();
        
		$element = GestionNivel1::find($id);
		$element->fill($request->only(			
            'orden'
		), $id);		

		$element->translateOrNew($locale)->nombre = $request->nombre;
		
		$element->save();
	}

	public function eliminar($id)
	{
		GestionNivel1::destroy($id);
	}

	
}