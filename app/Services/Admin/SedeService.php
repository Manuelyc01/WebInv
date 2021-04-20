<?php

namespace App\Services\Admin;

use App\Models\Sede;

class SedeService
{
    public function listar()
	{
        $element = Sede::all();
		return $element;
	}

	public function registrar($request)
	{
        $locale = app()->getLocale();
        $locale == 'es' ? $newLocale = 'en' : $newLocale = 'es';

        //arraySucursal
		$columnas_item1 = array(0 => 'txt1A', 1 => 'txt2A', 2 => 'txt3A', 3 => 'txt4A', 4 => 'txt5A', 5 => 'txt6A');
		$a_item1 = array();
        array_push($a_item1, $request->txt1A);
        array_push($a_item1, $request->txt2A);
        array_push($a_item1, $request->txt3A);
        array_push($a_item1, $request->txt4A);
        array_push($a_item1, $request->txt5A);
        array_push($a_item1, $request->txt6A);
        
        if($a_item1[0] != null)
            $arraySucursal = \Helper::parseArray($a_item1, $columnas_item1);
		else
            $arraySucursal = null;   
            
        //arrayAgencia
		$columnas_item2 = array(0 => 't1A', 1 => 't2A', 2 => 't3A', 3 => 't4A', 4 => 't5A', 5 => 't6A');
		$a_item2 = array();
        array_push($a_item2, $request->t1A);
        array_push($a_item2, $request->t2A);
        array_push($a_item2, $request->t3A);
        array_push($a_item2, $request->t4A);
        array_push($a_item2, $request->t5A);
        array_push($a_item2, $request->t6A);
        
        if($a_item2[0] != null)
            $arrayAgencia = \Helper::parseArray($a_item2, $columnas_item2);
		else
            $arrayAgencia = null;  
            
        //arrayUnidad
		$columnas_item3 = array(0 => 'tx1A', 1 => 'tx2A', 2 => 'tx3A', 3 => 'tx4A', 4 => 'tx5A', 5 => 'tx6A');
		$a_item3 = array();
        array_push($a_item3, $request->tx1A);
        array_push($a_item3, $request->tx2A);
        array_push($a_item3, $request->tx3A);
        array_push($a_item3, $request->tx4A);
        array_push($a_item3, $request->tx5A);
        array_push($a_item3, $request->tx6A);
        
        if($a_item3[0] != null)
            $arrayUnidad = \Helper::parseArray($a_item3, $columnas_item3);
		else
            $arrayUnidad = null;  

        $element = Sede::create($request->only(
            'imagenMapa'
        ));

		$element->translateOrNew($locale)->nombre = $request->nombre;
        $element->translateOrNew($newLocale)->nombre = $request->nombre;

        $element->translateOrNew($locale)->arraySucursal = $arraySucursal;
        $element->translateOrNew($newLocale)->arraySucursal = $arraySucursal;

        $element->translateOrNew($locale)->arrayAgencia = $arrayAgencia;
        $element->translateOrNew($newLocale)->arrayAgencia = $arrayAgencia;

        $element->translateOrNew($locale)->arrayUnidad = $arrayUnidad;
        $element->translateOrNew($newLocale)->arrayUnidad = $arrayUnidad;

		$element->save();
    }
    
    public function editar($id)
    {
        $element = Sede::find($id);
		return $element;
    }

	public function actualizar($request, $id)
	{
        $locale = app()->getLocale();

        //arraySucursal
		$columnas_item1 = array(0 => 'txt1A', 1 => 'txt2A', 2 => 'txt3A', 3 => 'txt4A', 4 => 'txt5A', 5 => 'txt6A');
		$a_item1 = array();
        array_push($a_item1, $request->txt1A);
        array_push($a_item1, $request->txt2A);
        array_push($a_item1, $request->txt3A);
        array_push($a_item1, $request->txt4A);
        array_push($a_item1, $request->txt5A);
        array_push($a_item1, $request->txt6A);
        
        if($a_item1[0] != null)
            $arraySucursal = \Helper::parseArray($a_item1, $columnas_item1);
		else
            $arraySucursal = null;   
            
        //arrayAgencia
		$columnas_item2 = array(0 => 't1A', 1 => 't2A', 2 => 't3A', 3 => 't4A', 4 => 't5A', 5 => 't6A');
		$a_item2 = array();
        array_push($a_item2, $request->t1A);
        array_push($a_item2, $request->t2A);
        array_push($a_item2, $request->t3A);
        array_push($a_item2, $request->t4A);
        array_push($a_item2, $request->t5A);
        array_push($a_item2, $request->t6A);
        
        if($a_item2[0] != null)
            $arrayAgencia = \Helper::parseArray($a_item2, $columnas_item2);
		else
            $arrayAgencia = null;  
            
        //arrayUnidad
		$columnas_item3 = array(0 => 'tx1A', 1 => 'tx2A', 2 => 'tx3A', 3 => 'tx4A', 4 => 'tx5A', 5 => 'tx6A');
		$a_item3 = array();
        array_push($a_item3, $request->tx1A);
        array_push($a_item3, $request->tx2A);
        array_push($a_item3, $request->tx3A);
        array_push($a_item3, $request->tx4A);
        array_push($a_item3, $request->tx5A);
        array_push($a_item3, $request->tx6A);
        
        if($a_item3[0] != null)
            $arrayUnidad = \Helper::parseArray($a_item3, $columnas_item3);
		else
            $arrayUnidad = null; 
        
        $element = Sede::find($id);	
        $element->fill($request->only(			
            'imagenMapa'
		), $id);		

		$element->translateOrNew($locale)->nombre = $request->nombre;
        $element->translateOrNew($locale)->arraySucursal = $arraySucursal;
        $element->translateOrNew($locale)->arrayAgencia = $arrayAgencia;
        $element->translateOrNew($locale)->arrayUnidad = $arrayUnidad;
		
		$element->save();
	}

	public function eliminar($id)
	{
		Sede::destroy($id);
	}

	
}