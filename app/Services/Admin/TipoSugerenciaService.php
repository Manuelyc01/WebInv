<?php

namespace App\Services\Admin;

use App\Models\TipoSugerencia;

class TipoSugerenciaService
{
    public function listar()
	{
        $element = TipoSugerencia::all();
		return $element;
	}

	public function registrar($request)
	{
        $locale = app()->getLocale();
        $locale == 'es' ? $newLocale = 'en' : $newLocale = 'es';

        $element = TipoSugerencia::create($request->only(
            'orden'
        ));

		$element->translateOrNew($locale)->nombre = $request->nombre;
        $element->translateOrNew($newLocale)->nombre = $request->nombre;

		$element->save();
    }
    
    public function editar($id)
    {
        $element = TipoSugerencia::find($id);
		return $element;
    }

	public function actualizar($request, $id)
	{
        $locale = app()->getLocale();
        
        $element = TipoSugerencia::find($id);	
        $element->fill($request->only(			
            'orden'
		), $id);		

		$element->translateOrNew($locale)->nombre = $request->nombre;
		
		$element->save();
	}

	public function eliminar($id)
	{
		TipoSugerencia::destroy($id);
	}

	
}