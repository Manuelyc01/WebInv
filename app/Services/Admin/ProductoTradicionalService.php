<?php

namespace App\Services\Admin;

use App\Models\{ProdTradi, EtiquetaTradi};

class ProductoTradicionalService
{
    public function listar()
	{
        $element = ProdTradi::all();
		return $element;
	}

	public function registrar($request)
	{
        $locale = app()->getLocale();
        $locale == 'es' ? $newLocale = 'en' : $newLocale = 'es';

        //array
		$columnas_item1 = array(0 => 'texto1A', 1 => 'img1A', 2 => 'img2A', 3 => 'img3A');
		$a_item1 = array();
        array_push($a_item1, $request->texto1A);
		array_push($a_item1, $request->img1A);
		array_push($a_item1, $request->img2A);
		array_push($a_item1, $request->img3A);
        
        if($a_item1[0] != null)
            $array = \Helper::parseArray($a_item1, $columnas_item1);
		else
			$array = null;

        $element = ProdTradi::create($request->only(			
            'imagenListado',
            'etiqueta_tradi_id'
		));

		$element->translateOrNew($locale)->nombre = $request->nombre;
        $element->translateOrNew($newLocale)->nombre = $request->nombre;

		$element->translateOrNew($locale)->des = $request->des;
        $element->translateOrNew($newLocale)->des = $request->des;
        
        $element->translateOrNew($locale)->zonaVenta = $request->zonaVenta;
        $element->translateOrNew($newLocale)->zonaVenta = $request->zonaVenta;
        
        $element->translateOrNew($locale)->array = $array;
        $element->translateOrNew($newLocale)->array = $array;
        
        $element->translateOrNew($locale)->tituloRelacionados = $request->tituloRelacionados;
        $element->translateOrNew($newLocale)->tituloRelacionados = $request->tituloRelacionados;

        $element->translateOrNew($locale)->documento = $request->documento;
        $element->translateOrNew($newLocale)->documento = $request->documento;

        $element->save();
        
        $element->ProductosTradicionalesRelacionados()->sync($request->ProductosTradicionalesRelacionados);
    }
    
    public function editar($id)
    {
        $element = ProdTradi::find($id);
		return $element;
    }

	public function actualizar($request, $id)
	{
        $locale = app()->getLocale();

        //array
		$columnas_item1 = array(0 => 'texto1A', 1 => 'img1A', 2 => 'img2A', 3 => 'img3A');
		$a_item1 = array();
        array_push($a_item1, $request->texto1A);
		array_push($a_item1, $request->img1A);
		array_push($a_item1, $request->img2A);
		array_push($a_item1, $request->img3A);
        
        if($a_item1[0] != null)
            $array = \Helper::parseArray($a_item1, $columnas_item1);
		else
			$array = null;
        
        $element = ProdTradi::find($id);
		$element->fill($request->only(			
            'imagenListado',
            'etiqueta_tradi_id'
		), $id);

		$element->translateOrNew($locale)->nombre = $request->nombre;
		$element->translateOrNew($locale)->des = $request->des;
        $element->translateOrNew($locale)->zonaVenta = $request->zonaVenta;        
        $element->translateOrNew($locale)->array = $array;        
        $element->translateOrNew($locale)->tituloRelacionados = $request->tituloRelacionados;
        $element->translateOrNew($locale)->documento = $request->documento;  
		
        $element->save();
        
        $element->ProductosTradicionalesRelacionados()->sync($request->ProductosTradicionalesRelacionados);
	}

	public function eliminar($id)
	{
		ProdTradi::destroy($id);
    }
    
    public function listarProductosTradicionaleslesRelacionados()
	{
		$items = ProdTradi::all();
		$plucked = $items->pluck('nombre','id');
		return $plucked;
	}
	
	public function ddlEtiquetaTradicional()
	{
		$items = EtiquetaTradi::All();
        $array = array();
        $array[0] = '-- seleccione --';
		foreach ($items as $c) {
			$c->nombre ? $value = $c->nombre : $value = '-';
			$array[$c->id] = $value;
		}
        return $array;
    }
	
}