<?php

namespace App\Services\Admin;

use App\Models\EtiquetaTradi;

class EtiquetaTradicionalService
{
    public function listar()
	{
        $element = EtiquetaTradi::all();
		return $element;
	}

	public function registrar($request)
	{
        $locale = app()->getLocale();
        $locale == 'es' ? $newLocale = 'en' : $newLocale = 'es';

        $element = EtiquetaTradi::create();

		$element->translateOrNew($locale)->nombre = $request->nombre;
        $element->translateOrNew($newLocale)->nombre = $request->nombre;

		$element->save();
    }
    
    public function editar($id)
    {
        $element = EtiquetaTradi::find($id);
		return $element;
    }

	public function actualizar($request, $id)
	{
        $locale = app()->getLocale();
        
        $element = EtiquetaTradi::find($id);		

		$element->translateOrNew($locale)->nombre = $request->nombre;
		
		$element->save();
	}

	public function eliminar($id)
	{
		EtiquetaTradi::destroy($id);
	}

	
}