<?php

namespace App\Services\Admin;

use App\Models\Tradicional;

class TradicionalService
{
    public function listar()
	{
        $element = Tradicional::first();
		return $element;
	}

	public function registrar($request)
	{
        $locale = app()->getLocale();
        $locale == 'es' ? $newLocale = 'en' : $newLocale = 'es';

        //arrayB1
		$columnas_item1 = array(0 => 'txt1A', 1 => 'txt2A', 2 => 'txt3A');
		$a_item1 = array();
        array_push($a_item1, $request->txt1A);
		array_push($a_item1, $request->txt2A);
		array_push($a_item1, $request->txt3A);
        
        if($a_item1[0] != null)
            $arrayB1 = \Helper::parseArray($a_item1, $columnas_item1);
		else
            $arrayB1 = null;   

        $element = Tradicional::create($request->only(			
            'imagenFondoListado',
            'imagenCaladaListado',
            'imagenIzqB1',
            'imagenDerB1'
		));

		$element->translateOrNew($locale)->tituloListado = $request->tituloListado;
		$element->translateOrNew($newLocale)->tituloListado = $request->tituloListado;

        $element->translateOrNew($locale)->desListado = $request->desListado;
        $element->translateOrNew($newLocale)->desListado = $request->desListado;

        $element->translateOrNew($locale)->tituloB1 = $request->tituloB1;
        $element->translateOrNew($newLocale)->tituloB1 = $request->tituloB1;

        $element->translateOrNew($locale)->desB1 = $request->desB1;
        $element->translateOrNew($newLocale)->desB1 = $request->desB1;

        //arrayB1
        $element->translateOrNew($locale)->arrayB1 = $arrayB1;
        $element->translateOrNew($newLocale)->arrayB1 = $arrayB1;

        $element->translateOrNew($locale)->tituloB2 = $request->tituloB2;
        $element->translateOrNew($newLocale)->tituloB2 = $request->tituloB2;

        $element->translateOrNew($locale)->desB2 = $request->desB2;
        $element->translateOrNew($newLocale)->desB2 = $request->desB2;        
        
		$element->save();
    }
    
    public function editar($id)
    {
        //
    }

	public function actualizar($request, $id)
	{
        $locale = app()->getLocale();

        //arrayB1
		$columnas_item1 = array(0 => 'txt1A', 1 => 'txt2A', 2 => 'txt3A');
		$a_item1 = array();
        array_push($a_item1, $request->txt1A);
		array_push($a_item1, $request->txt2A);
		array_push($a_item1, $request->txt3A);
        
        if($a_item1[0] != null)
            $arrayB1 = \Helper::parseArray($a_item1, $columnas_item1);
		else
            $arrayB1 = null;
        
        $element = Tradicional::find($id);
		$element->fill($request->only(			
            'imagenFondoListado',
            'imagenCaladaListado',
            'imagenIzqB1',
            'imagenDerB1'
		), $id);

		$element->translateOrNew($locale)->tituloListado = $request->tituloListado;
        $element->translateOrNew($locale)->desListado = $request->desListado;
        $element->translateOrNew($locale)->tituloB1 = $request->tituloB1;
        $element->translateOrNew($locale)->desB1 = $request->desB1;
        $element->translateOrNew($locale)->arrayB1 = $arrayB1; //arrayB1
        $element->translateOrNew($locale)->tituloB2 = $request->tituloB2;
        $element->translateOrNew($locale)->desB2 = $request->desB2; 

		$element->save();
	}

	public function eliminar($id)
	{
		//
	}
}