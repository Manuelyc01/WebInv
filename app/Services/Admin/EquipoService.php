<?php

namespace App\Services\Admin;

use App\Models\Equipo;

class EquipoService
{
    public function listar()
	{
        $element = Equipo::first();
		return $element;
	}

	public function registrar($request)
	{
        $locale = app()->getLocale();
        $locale == 'es' ? $newLocale = 'en' : $newLocale = 'es';

        $element = Equipo::create($request->only(			
			'imagen'
		));

		$element->translateOrNew($locale)->titulo = $request->titulo;
		$element->translateOrNew($newLocale)->titulo = $request->titulo;

		$element->translateOrNew($locale)->subtitulo = $request->subtitulo;
		$element->translateOrNew($newLocale)->subtitulo = $request->subtitulo;

		$element->translateOrNew($locale)->textoBtn = $request->textoBtn;
		$element->translateOrNew($newLocale)->textoBtn = $request->textoBtn;
		
		$element->save();
    }
    
    public function editar($id)
    {
        //
    }

	public function actualizar($request, $id)
	{
        $locale = app()->getLocale();
        
        $element = Equipo::find($id);
		$element->fill($request->only(			
            'imagen'
		), $id);

		$element->translateOrNew($locale)->titulo = $request->titulo;
		$element->translateOrNew($locale)->subtitulo = $request->subtitulo;
		$element->translateOrNew($locale)->textoBtn = $request->textoBtn;

		$element->save();
	}

	public function eliminar($id)
	{
		//
	}
}