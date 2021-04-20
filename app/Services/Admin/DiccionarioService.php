<?php

namespace App\Services\Admin;

use App\{Dictionary};

class DiccionarioService
{
    public function listar()
	{
        $diccionario = Dictionary::all();
		return $diccionario;
	}

	public function registrar($request)
	{
        $locale = app()->getLocale();
        $locale == 'es' ? $newLocale = 'en' : $newLocale = 'es';

        $diccionario = Dictionary::create();
        
        
		$diccionario->translateOrNew($locale)->static_text = $request->static_text;
        $diccionario->translateOrNew($newLocale)->static_text = $request->static_text;
        
		$diccionario->save();
    }
    
    public function editar($id)
    {
        $diccionario = Dictionary::find($id);
		return $diccionario;
    }

	public function actualizar($request, $id)
	{
        $locale = app()->getLocale();
        
        $diccionario = Dictionary::find($id);
        
        $diccionario->translateOrNew($locale)->static_text = $request->static_text;
		
        $diccionario->save();
	}

	public function eliminar($id)
	{
		Dictionary::destroy($id);
    }
    
    
}