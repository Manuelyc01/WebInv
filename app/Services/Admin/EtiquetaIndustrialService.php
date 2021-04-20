<?php

namespace App\Services\Admin;

use App\Models\EtiquetaIndus;

class EtiquetaIndustrialService
{
    public function listar()
	{
        $element = EtiquetaIndus::all();
		return $element;
	}

	public function registrar($request)
	{
        $locale = app()->getLocale();
        $locale == 'es' ? $newLocale = 'en' : $newLocale = 'es';

        $element = EtiquetaIndus::create();

		$element->translateOrNew($locale)->nombre = $request->nombre;
        $element->translateOrNew($newLocale)->nombre = $request->nombre;

		$element->save();
    }
    
    public function editar($id)
    {
        $element = EtiquetaIndus::find($id);
		return $element;
    }

	public function actualizar($request, $id)
	{
        $locale = app()->getLocale();
        
        $element = EtiquetaIndus::find($id);		

		$element->translateOrNew($locale)->nombre = $request->nombre;
		
		$element->save();
	}

	public function eliminar($id)
	{
		EtiquetaIndus::destroy($id);
	}

	
}