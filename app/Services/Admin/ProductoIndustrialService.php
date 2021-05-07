<?php

namespace App\Services\Admin;

use App\Models\{ProdIndus, SubcatIndus, EtiquetaIndus};

class ProductoIndustrialService
{
    public function listar()
	{
        $element = ProdIndus::all();
		return $element;
	}

	public function registrar($request)
	{
        $locale = app()->getLocale();
		$locale == 'es' ? $newLocale = 'en' : $newLocale = 'es';
		
		//arrayPresentaciones
		$columnas_item1 = array(0 => 'texto1A', 1 => 'img1A', 2 => 'img2A', 3 => 'img3A');
		$a_item1 = array();
        array_push($a_item1, $request->texto1A);
		array_push($a_item1, $request->img1A);
		array_push($a_item1, $request->img2A);
		array_push($a_item1, $request->img3A);
        
        if($a_item1[0] != null)
            $arrayPresentaciones = \Helper::parseArray($a_item1, $columnas_item1);
		else
			$arrayPresentaciones = null;
			
		//arrayBeneficios
		$columnas_item2 = array(0 => 'txt1A', 1 => 'txt2A');
		$a_item2 = array();
        array_push($a_item2, $request->txt1A);
		array_push($a_item2, $request->txt2A);
        
        if($a_item2[0] != null)
            $arrayBeneficios = \Helper::parseArray($a_item2, $columnas_item2);
		else
            $arrayBeneficios = null;

        $element = ProdIndus::create($request->only(			
			'imagenListado',
			'imagenFondo',
			'imagenFondoMobile',
			'imagenBeneficios',
			'imagenBeneficios2',
			'subcat_indus_id',
			'etiqueta_indus_id',
			'check_exportacion'
		));

		$element->translateOrNew($locale)->enlaceFacebook = $request->enlaceFacebook;
        $element->translateOrNew($newLocale)->enlaceFacebook = $request->enlaceFacebook;

        $element->translateOrNew($locale)->enlaceInstagram = $request->enlaceInstagram;
        $element->translateOrNew($newLocale)->enlaceInstagram = $request->enlaceInstagram;

        $element->translateOrNew($locale)->enlaceWhatsapp = $request->enlaceWhatsapp;
        $element->translateOrNew($newLocale)->enlaceWhatsapp = $request->enlaceWhatsapp;
        

		$element->translateOrNew($locale)->nombre = $request->nombre;
        $element->translateOrNew($newLocale)->nombre = $request->nombre;

		$element->translateOrNew($locale)->des = $request->des;
        $element->translateOrNew($newLocale)->des = $request->des;
		
		//arrayPresentaciones
        $element->translateOrNew($locale)->arrayPresentaciones = $arrayPresentaciones;
        $element->translateOrNew($newLocale)->arrayPresentaciones = $arrayPresentaciones;
        
        $element->translateOrNew($locale)->fichaPDF = $request->fichaPDF;
		$element->translateOrNew($newLocale)->fichaPDF = $request->fichaPDF;

		//arrayBeneficios
		$element->translateOrNew($locale)->arrayBeneficios = $arrayBeneficios;
        $element->translateOrNew($newLocale)->arrayBeneficios = $arrayBeneficios;
        
		$element->translateOrNew($locale)->tituloRelacionados = $request->tituloRelacionados;
		$element->translateOrNew($newLocale)->tituloRelacionados = $request->tituloRelacionados;
		
		$element->save();

		$element->ProductosIndustrialesRelacionados()->sync($request->ProductosIndustrialesRelacionados);

    }
    
    public function editar($id)
    {
        $element = ProdIndus::find($id);
		return $element;
    }

	public function actualizar($request, $id)
	{
		$locale = app()->getLocale();
		
		//arrayPresentaciones
		$columnas_item1 = array(0 => 'texto1A', 1 => 'img1A', 2 => 'img2A', 3 => 'img3A');
		$a_item1 = array();
        array_push($a_item1, $request->texto1A);
		array_push($a_item1, $request->img1A);
		array_push($a_item1, $request->img2A);
		array_push($a_item1, $request->img3A);
        
        if($a_item1[0] != null)
            $arrayPresentaciones = \Helper::parseArray($a_item1, $columnas_item1);
		else
			$arrayPresentaciones = null;
			
		//arrayBeneficios
		$columnas_item2 = array(0 => 'txt1A', 1 => 'txt2A');
		$a_item2 = array();
        array_push($a_item2, $request->txt1A);
		array_push($a_item2, $request->txt2A);

		if($a_item2[0] != null)
            $arrayBeneficios = \Helper::parseArray($a_item2, $columnas_item2);
		else
            $arrayBeneficios = null;
        
        $element = ProdIndus::find($id);
		$element->fill($request->only(			
            'imagenListado',
			'imagenFondo',
			'imagenFondoMobile',
			'imagenBeneficios',
			'imagenBeneficios2',
			'subcat_indus_id',
			'etiqueta_indus_id',
			'check_exportacion'
		), $id);

		$element->translateOrNew($locale)->enlaceFacebook = $request->enlaceFacebook;
        $element->translateOrNew($locale)->enlaceInstagram = $request->enlaceInstagram;
        $element->translateOrNew($locale)->enlaceWhatsapp = $request->enlaceWhatsapp;
        
		$element->translateOrNew($locale)->nombre = $request->nombre;
		$element->translateOrNew($locale)->des = $request->des;        
        $element->translateOrNew($locale)->arrayPresentaciones = $arrayPresentaciones; //arrayPresentaciones        
        $element->translateOrNew($locale)->fichaPDF = $request->fichaPDF;
		$element->translateOrNew($locale)->arrayBeneficios = $arrayBeneficios; //arrayBeneficios        
		$element->translateOrNew($locale)->tituloRelacionados = $request->tituloRelacionados;
		
		$element->save();

		$element->ProductosIndustrialesRelacionados()->sync($request->ProductosIndustrialesRelacionados);

	}

	public function eliminar($id)
	{
		ProdIndus::destroy($id);
	}

	public function listarProductosIndustrialesRelacionados()
	{
		$items = ProdIndus::all();
		$plucked = $items->pluck('nombre','id');
		return $plucked;
	}

	public function ddlSubcatIndustrial()
	{
		$items = SubcatIndus::All();
        $array = array();
        $array[0] = '-- seleccione --';
		foreach ($items as $c) {
			$c->nombre ? $value = $c->nombre : $value = '-';
			$array[$c->id] = $value;
		}
        return $array;
	}
	
	public function ddlEtiquetaIndustrial()
	{
		$items = EtiquetaIndus::All();
        $array = array();
        $array[0] = '-- seleccione --';
		foreach ($items as $c) {
			$c->nombre ? $value = $c->nombre : $value = '-';
			$array[$c->id] = $value;
		}
        return $array;
    }

    public function ddlExportacion()
	{
		// $items = EtiquetaIndus::All();
        $array = array();
        //$array[0] = '-- seleccione --';
		$array[1] = "Con exportación";
		$array[0] = "Sin exportación";
        return $array;
    }

	
}