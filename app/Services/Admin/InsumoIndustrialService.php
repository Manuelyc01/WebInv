<?php

namespace App\Services\Admin;

use App\Models\InsumoIndustrial;

class InsumoIndustrialService
{
    public function listar()
	{
        $element = InsumoIndustrial::first();
		return $element;
	}

	public function registrar($request)
	{
        $locale = app()->getLocale();
        $locale == 'es' ? $newLocale = 'en' : $newLocale = 'es';

        $element = InsumoIndustrial::create($request->only(			
            'imagenFondoListado',
            'imagenCaladaListado'
		));

		$element->translateOrNew($locale)->tituloListado = $request->tituloListado;
		$element->translateOrNew($newLocale)->tituloListado = $request->tituloListado;

        $element->translateOrNew($locale)->desListado = $request->desListado;
        $element->translateOrNew($newLocale)->desListado = $request->desListado;

        
		$element->save();
    }
    
    public function editar($id)
    {
        //
    }

	public function actualizar($request, $id)
	{
        $locale = app()->getLocale();
        
        $element = InsumoIndustrial::find($id);
		$element->fill($request->only(			
            'imagenFondoListado',
            'imagenCaladaListado'
		), $id);

		$element->translateOrNew($locale)->tituloListado = $request->tituloListado;
        $element->translateOrNew($locale)->desListado = $request->desListado;

		$element->save();
	}

	public function eliminar($id)
	{
		//
	}
}