<?php

namespace App\Services\Admin;

use App\Models\Historia;

class HistoriaService
{
    public function listar()
	{
        $element = Historia::first();
		return $element;
	}

	public function registrar($request)
	{
        $locale = app()->getLocale();
        $locale == 'es' ? $newLocale = 'en' : $newLocale = 'es';

        //arrayB1
		$columnas_item1 = array(0 => 'archivo1A', 1 => 'archivo2A', 2 => 'texto3A');
		$a_item1 = array();
        array_push($a_item1, $request->archivo1A);
        array_push($a_item1, $request->archivo2A);
        array_push($a_item1, $request->texto3A);
        
        if($a_item1[0] != null)
            $arrayB1 = \Helper::parseArray($a_item1, $columnas_item1);
		else
            $arrayB1 = null;   
            
        //arrayB3
		$columnas_item2 = array(0 => 'imgA', 1 => 'tx1A', 2 => 'tx2A', 3 => 'txDesA');
		$a_item2 = array();
        array_push($a_item2, $request->imgA);
        array_push($a_item2, $request->tx1A);
        array_push($a_item2, $request->tx2A);
        array_push($a_item2, $request->txDesA);
        
        if($a_item2[0] != null)
            $arrayB3 = \Helper::parseArray($a_item2, $columnas_item2);
		else
            $arrayB3 = null;  
            
        //arrayB4
		$columnas_item3 = array(0 => 'archivoOne1A');
		$a_item3 = array();
        array_push($a_item3, $request->archivoOne1A);
        
        if($a_item3[0] != null)
            $arrayB4 = \Helper::parseArray($a_item3, $columnas_item3);
		else
            $arrayB4 = null;  

        //array1B5
		$columnas_item4 = array(0 => 'archivoOne1A1');
		$a_item4 = array();
        array_push($a_item4, $request->archivoOne1A1);
        
        if($a_item4[0] != null)
            $array1B5 = \Helper::parseArray($a_item4, $columnas_item4);
		else
            $array1B5 = null;  

        //array2B5
		$columnas_item5 = array(0 => 'archivoOne1A2');
		$a_item5 = array();
        array_push($a_item5, $request->archivoOne1A2);
        
        if($a_item5[0] != null)
            $array2B5 = \Helper::parseArray($a_item5, $columnas_item5);
		else
            $array2B5 = null; 

        $element = Historia::create($request->only(			
            'imagenIzqB1',
            'imagenDerB1',
            'imgHojaIzqB2',
            'imgHojaDerB2',
            'imgB4'
		));

		$element->translateOrNew($locale)->tituloB1 = $request->tituloB1;
		$element->translateOrNew($newLocale)->tituloB1 = $request->tituloB1;

		$element->translateOrNew($locale)->desB1 = $request->desB1;
		$element->translateOrNew($newLocale)->desB1 = $request->desB1;

        //arrayB1
		$element->translateOrNew($locale)->arrayB1 = $arrayB1;
        $element->translateOrNew($newLocale)->arrayB1 = $arrayB1;
        
        $element->translateOrNew($locale)->tituloMisionB2 = $request->tituloMisionB2;
        $element->translateOrNew($newLocale)->tituloMisionB2 = $request->tituloMisionB2;
        
        $element->translateOrNew($locale)->subtituloMisionB2 = $request->subtituloMisionB2;
        $element->translateOrNew($newLocale)->subtituloMisionB2 = $request->subtituloMisionB2;
        
        $element->translateOrNew($locale)->desMisionB2 = $request->desMisionB2;
        $element->translateOrNew($newLocale)->desMisionB2 = $request->desMisionB2;
        
        $element->translateOrNew($locale)->tituloVisionB2 = $request->tituloVisionB2;
        $element->translateOrNew($newLocale)->tituloVisionB2 = $request->tituloVisionB2;
        
        $element->translateOrNew($locale)->subtituloVisionB2 = $request->subtituloVisionB2;
        $element->translateOrNew($newLocale)->subtituloVisionB2 = $request->subtituloVisionB2;
        
        $element->translateOrNew($locale)->desVisionB2 = $request->desVisionB2;
        $element->translateOrNew($newLocale)->desVisionB2 = $request->desVisionB2;
        
        $element->translateOrNew($locale)->tituloB3 = $request->tituloB3;
        $element->translateOrNew($newLocale)->tituloB3 = $request->tituloB3;

        //arrayB3
		$element->translateOrNew($locale)->arrayB3 = $arrayB3;
        $element->translateOrNew($newLocale)->arrayB3 = $arrayB3;

        $element->translateOrNew($locale)->tituloB4 = $request->tituloB4;
        $element->translateOrNew($newLocale)->tituloB4 = $request->tituloB4;
        
        $element->translateOrNew($locale)->desB4 = $request->desB4;
        $element->translateOrNew($newLocale)->desB4 = $request->desB4;
        
        //arrayB4
        $element->translateOrNew($locale)->arrayB4 = $arrayB4;
        $element->translateOrNew($newLocale)->arrayB4 = $arrayB4;
        
        $element->translateOrNew($locale)->tituloB5 = $request->tituloB5;
        $element->translateOrNew($newLocale)->tituloB5 = $request->tituloB5;
        
        $element->translateOrNew($locale)->textoBtn1B5 = $request->textoBtn1B5;
        $element->translateOrNew($newLocale)->textoBtn1B5 = $request->textoBtn1B5;
        
        //array1B5
        $element->translateOrNew($locale)->array1B5 = $array1B5;
        $element->translateOrNew($newLocale)->array1B5 = $array1B5;

        $element->translateOrNew($locale)->titulo1B5 = $request->titulo1B5;
        $element->translateOrNew($newLocale)->titulo1B5 = $request->titulo1B5;
        
        $element->translateOrNew($locale)->subtitulo1B5 = $request->subtitulo1B5;
        $element->translateOrNew($newLocale)->subtitulo1B5 = $request->subtitulo1B5;
        
        $element->translateOrNew($locale)->des1B5 = $request->des1B5;
        $element->translateOrNew($newLocale)->des1B5 = $request->des1B5;
        
        $element->translateOrNew($locale)->textoBtn2B5 = $request->textoBtn2B5;
        $element->translateOrNew($newLocale)->textoBtn2B5 = $request->textoBtn2B5;
        
        //array2B5
        $element->translateOrNew($locale)->array2B5 = $array2B5;
        $element->translateOrNew($newLocale)->array2B5 = $array2B5;
        
        $element->translateOrNew($locale)->titulo2B5 = $request->titulo2B5;
        $element->translateOrNew($newLocale)->titulo2B5 = $request->titulo2B5;
        
        $element->translateOrNew($locale)->subtitulo2B5 = $request->subtitulo2B5;
        $element->translateOrNew($newLocale)->subtitulo2B5 = $request->subtitulo2B5;
        
        $element->translateOrNew($locale)->des2B5 = $request->des2B5;
		$element->translateOrNew($newLocale)->des2B5 = $request->des2B5;
		
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
		$columnas_item1 = array(0 => 'archivo1A', 1 => 'archivo2A', 2 => 'texto3A');
		$a_item1 = array();
        array_push($a_item1, $request->archivo1A);
        array_push($a_item1, $request->archivo2A);
        array_push($a_item1, $request->texto3A);
        
        if($a_item1[0] != null)
            $arrayB1 = \Helper::parseArray($a_item1, $columnas_item1);
		else
            $arrayB1 = null;   
            
        //arrayB3
		$columnas_item2 = array(0 => 'imgA', 1 => 'tx1A', 2 => 'tx2A', 3 => 'txDesA');
		$a_item2 = array();
        array_push($a_item2, $request->imgA);
        array_push($a_item2, $request->tx1A);
        array_push($a_item2, $request->tx2A);
        array_push($a_item2, $request->txDesA);
        
        if($a_item2[0] != null)
            $arrayB3 = \Helper::parseArray($a_item2, $columnas_item2);
		else
            $arrayB3 = null;  
            
        //arrayB4
		$columnas_item3 = array(0 => 'archivoOne1A');
		$a_item3 = array();
        array_push($a_item3, $request->archivoOne1A);
        
        if($a_item3[0] != null)
            $arrayB4 = \Helper::parseArray($a_item3, $columnas_item3);
		else
            $arrayB4 = null;  

        //array1B5
		$columnas_item4 = array(0 => 'archivoOne1A1');
		$a_item4 = array();
        array_push($a_item4, $request->archivoOne1A1);
        
        if($a_item4[0] != null)
            $array1B5 = \Helper::parseArray($a_item4, $columnas_item4);
		else
            $array1B5 = null;  

        //array2B5
		$columnas_item5 = array(0 => 'archivoOne1A2');
		$a_item5 = array();
        array_push($a_item5, $request->archivoOne1A2);
        
        if($a_item5[0] != null)
            $array2B5 = \Helper::parseArray($a_item5, $columnas_item5);
		else
            $array2B5 = null; 
        
        $element = Historia::find($id);
		$element->fill($request->only(			
            'imagenIzqB1',
            'imagenDerB1',
            'imgHojaIzqB2',
            'imgHojaDerB2',
            'imgB4'
		), $id);

		$element->translateOrNew($locale)->tituloB1 = $request->tituloB1;
		$element->translateOrNew($locale)->desB1 = $request->desB1;
		$element->translateOrNew($locale)->arrayB1 = $arrayB1; //arrayB1       
        $element->translateOrNew($locale)->tituloMisionB2 = $request->tituloMisionB2;        
        $element->translateOrNew($locale)->subtituloMisionB2 = $request->subtituloMisionB2;        
        $element->translateOrNew($locale)->desMisionB2 = $request->desMisionB2;        
        $element->translateOrNew($locale)->tituloVisionB2 = $request->tituloVisionB2;        
        $element->translateOrNew($locale)->subtituloVisionB2 = $request->subtituloVisionB2;        
        $element->translateOrNew($locale)->desVisionB2 = $request->desVisionB2;        
        $element->translateOrNew($locale)->tituloB3 = $request->tituloB3;    
        $element->translateOrNew($locale)->arrayB3 = $arrayB3; //arrayB3 
        $element->translateOrNew($locale)->tituloB4 = $request->tituloB4;     
        $element->translateOrNew($locale)->desB4 = $request->desB4;        
        $element->translateOrNew($locale)->arrayB4 = $arrayB4; //arrayB4        
        $element->translateOrNew($locale)->tituloB5 = $request->tituloB5;        
        $element->translateOrNew($locale)->textoBtn1B5 = $request->textoBtn1B5;        
        $element->translateOrNew($locale)->array1B5 = $array1B5; //array1B5
        $element->translateOrNew($locale)->titulo1B5 = $request->titulo1B5;
        $element->translateOrNew($locale)->subtitulo1B5 = $request->subtitulo1B5;        
        $element->translateOrNew($locale)->des1B5 = $request->des1B5;        
        $element->translateOrNew($locale)->textoBtn2B5 = $request->textoBtn2B5;        
        $element->translateOrNew($locale)->array2B5 = $array2B5; //array2B5        
        $element->translateOrNew($locale)->titulo2B5 = $request->titulo2B5;        
        $element->translateOrNew($locale)->subtitulo2B5 = $request->subtitulo2B5;        
        $element->translateOrNew($locale)->des2B5 = $request->des2B5;

		$element->save();
	}

	public function eliminar($id)
	{
		//
	}
}