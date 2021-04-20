<?php

namespace App\Services\Admin;

use App\Models\{GestionNivel3b, GestionNivel3};

class GestionNivel3bService
{
    public function listar()
	{
        $element = GestionNivel3b::all();
		return $element;
	}

	public function registrar($request)
	{
        $locale = app()->getLocale();
		$locale == 'es' ? $newLocale = 'en' : $newLocale = 'es';
		
		//array
		$columnas_item1 = array(0 => 'archivo1A', 1 => 'texto2A');
		$a_item1 = array();
        array_push($a_item1, $request->archivo1A);
        array_push($a_item1, $request->texto2A);
        
        if($a_item1[0] != null)
            $array = \Helper::parseArray($a_item1, $columnas_item1);
		else
			$array = null;    

        $element = GestionNivel3b::create($request->only(			
            'gestion_nivel3_id'
		));

		$element->translateOrNew($locale)->titulo = $request->titulo;
        $element->translateOrNew($newLocale)->titulo = $request->titulo;

        $element->translateOrNew($locale)->des = $request->des;
        $element->translateOrNew($newLocale)->des = $request->des;

        $element->translateOrNew($locale)->array = $array;
        $element->translateOrNew($newLocale)->array = $array;

		$element->save();
    }
    
    public function editar($id)
    {
        $element = GestionNivel3b::find($id);
		return $element;
    }

	public function actualizar($request, $id)
	{
		$locale = app()->getLocale();
		
		//array
		$columnas_item1 = array(0 => 'archivo1A', 1 => 'texto2A');
		$a_item1 = array();
        array_push($a_item1, $request->archivo1A);
        array_push($a_item1, $request->texto2A);
        
        if($a_item1[0] != null)
            $array = \Helper::parseArray($a_item1, $columnas_item1);
		else
			$array = null;   
        
		$element = GestionNivel3b::find($id);
		$element->fill($request->only(			
            'gestion_nivel3_id'
		), $id);		

		$element->translateOrNew($locale)->titulo = $request->titulo;
		$element->translateOrNew($locale)->des = $request->des;
        $element->translateOrNew($locale)->array = $array;

		$element->save();
	}

	public function eliminar($id)
	{
		GestionNivel3b::destroy($id);
    }
    
    public function ddlGestionNivel3()
	{
		$items = GestionNivel3::All();
        $array = array();
        $array[0] = '-- seleccione --';
		foreach ($items as $c) {
			$c->nombre ? $value = $c->nombre.' ('.$c->GestionNivel2->titulo.')' : $value = '-';
			$array[$c->id] = $value;
		}
        return $array;
	}

	
}