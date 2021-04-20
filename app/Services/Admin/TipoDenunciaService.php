<?php

namespace App\Services\Admin;

use App\Models\TipoDenuncia;

class TipoDenunciaService
{
    public function listar()
	{
        $element = TipoDenuncia::all();
		return $element;
	}

	public function registrar($request)
	{
        $locale = app()->getLocale();
        $locale == 'es' ? $newLocale = 'en' : $newLocale = 'es';

        $element = TipoDenuncia::create($request->only(
            'orden'
        ));

		$element->translateOrNew($locale)->nombre = $request->nombre;
        $element->translateOrNew($newLocale)->nombre = $request->nombre;

		$element->save();
    }
    
    public function editar($id)
    {
        $element = TipoDenuncia::find($id);
		return $element;
    }

	public function actualizar($request, $id)
	{
        $locale = app()->getLocale();
        
        $element = TipoDenuncia::find($id);	
        $element->fill($request->only(			
            'orden'
		), $id);		

		$element->translateOrNew($locale)->nombre = $request->nombre;
		
		$element->save();
	}

	public function eliminar($id)
	{
		TipoDenuncia::destroy($id);
	}

	
}