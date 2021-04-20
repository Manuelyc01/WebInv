<?php

namespace App\Services\Admin;

use App\Models\Info;

class InfoService
{
    public function listar()
	{
        $element = Info::first();
		return $element;
	}

	public function registrar($request)
	{
        $locale = app()->getLocale();
		$locale == 'es' ? $newLocale = 'en' : $newLocale = 'es';
		
		//arrayContactanos
		$columnas_item1 = array(0 => 'tx1A', 1 => 'tx2A', 2 => 'tx3A', 3 => 'tx4A', 4 => 'tx5A');
		$a_item1 = array();
		array_push($a_item1, $request->tx1A);
		array_push($a_item1, $request->tx2A);
		array_push($a_item1, $request->tx3A);
		array_push($a_item1, $request->tx4A);
		array_push($a_item1, $request->tx5A);
        
        if($a_item1[0] != null)
            $arrayContactanos = \Helper::parseArray($a_item1, $columnas_item1);
		else
			$arrayContactanos = null;   
			
		//array2Contactanos
		$columnas_item2 = array(0 => 'tx1A2', 1 => 'tx2A2', 2 => 'tx3A2', 3 => 'tx4A2', 4 => 'tx5A2');
		$a_item2 = array();
		array_push($a_item2, $request->tx1A2);
		array_push($a_item2, $request->tx2A2);
		array_push($a_item2, $request->tx3A2);
		array_push($a_item2, $request->tx4A2);
		array_push($a_item2, $request->tx5A2);
        
        if($a_item2[0] != null)
            $array2Contactanos = \Helper::parseArray($a_item2, $columnas_item2);
		else
            $array2Contactanos = null;   

        $element = Info::create($request->only(			
			'correoWeb',
			'correoFormSuscribete',
			'correoFormContactanos',
			'correoFormSugerencias',
			'correoFormDenuncias',
			'activarIdioma'
		));

		$element->translateOrNew($locale)->enlaceBlog = $request->enlaceBlog;
		$element->translateOrNew($newLocale)->enlaceBlog = $request->enlaceBlog;

		$element->translateOrNew($locale)->enlaceTransparencia = $request->enlaceTransparencia;
		$element->translateOrNew($newLocale)->enlaceTransparencia = $request->enlaceTransparencia;

		$element->translateOrNew($locale)->enlaceCocaleros = $request->enlaceCocaleros;
		$element->translateOrNew($newLocale)->enlaceCocaleros = $request->enlaceCocaleros;

		$element->translateOrNew($locale)->enlaceFE = $request->enlaceFE;
		$element->translateOrNew($newLocale)->enlaceFE = $request->enlaceFE;

		$element->translateOrNew($locale)->codEticaPDF = $request->codEticaPDF;
		$element->translateOrNew($newLocale)->codEticaPDF = $request->codEticaPDF;

		$element->translateOrNew($locale)->terminosPDF = $request->terminosPDF;
		$element->translateOrNew($newLocale)->terminosPDF = $request->terminosPDF;

		$element->translateOrNew($locale)->privacidadDatosPDF = $request->privacidadDatosPDF;
		$element->translateOrNew($newLocale)->privacidadDatosPDF = $request->privacidadDatosPDF;

		$element->translateOrNew($locale)->facebookEnaco = $request->facebookEnaco;
		$element->translateOrNew($newLocale)->facebookEnaco = $request->facebookEnaco;

		$element->translateOrNew($locale)->facebookDelisse = $request->facebookDelisse;
		$element->translateOrNew($newLocale)->facebookDelisse = $request->facebookDelisse;

		$element->translateOrNew($locale)->facebookKintu = $request->facebookKintu;
		$element->translateOrNew($newLocale)->facebookKintu = $request->facebookKintu;

		$element->translateOrNew($locale)->ciudadBase = $request->ciudadBase;
		$element->translateOrNew($newLocale)->ciudadBase = $request->ciudadBase;

		$element->translateOrNew($locale)->tlfCiudadBase = $request->tlfCiudadBase;
		$element->translateOrNew($newLocale)->tlfCiudadBase = $request->tlfCiudadBase;

		$element->translateOrNew($locale)->celCiudadBase = $request->celCiudadBase;
		$element->translateOrNew($newLocale)->celCiudadBase = $request->celCiudadBase;

		$element->translateOrNew($locale)->ciudadProv = $request->ciudadProv;
		$element->translateOrNew($newLocale)->ciudadProv = $request->ciudadProv;

		$element->translateOrNew($locale)->tlfCiudadProv = $request->tlfCiudadProv;
		$element->translateOrNew($newLocale)->tlfCiudadProv = $request->tlfCiudadProv;

		$element->translateOrNew($locale)->celCiudadProv = $request->celCiudadProv;
		$element->translateOrNew($newLocale)->celCiudadProv = $request->celCiudadProv;


		$element->translateOrNew($locale)->tituloProductos = $request->tituloProductos;
		$element->translateOrNew($newLocale)->tituloProductos = $request->tituloProductos;

		$element->translateOrNew($locale)->subtituloProductos = $request->subtituloProductos;
		$element->translateOrNew($newLocale)->subtituloProductos = $request->subtituloProductos;

		$element->translateOrNew($locale)->tituloGracias = $request->tituloGracias;
		$element->translateOrNew($newLocale)->tituloGracias = $request->tituloGracias;

		$element->translateOrNew($locale)->desGracias = $request->desGracias;
		$element->translateOrNew($newLocale)->desGracias = $request->desGracias;

		$element->translateOrNew($locale)->tituloGraciasDe = $request->tituloGraciasDe;
		$element->translateOrNew($newLocale)->tituloGraciasDe = $request->tituloGraciasDe;

		$element->translateOrNew($locale)->desGraciasDe = $request->desGraciasDe;
		$element->translateOrNew($newLocale)->desGraciasDe = $request->desGraciasDe;

		$element->translateOrNew($locale)->tituloSedes = $request->tituloSedes;
		$element->translateOrNew($newLocale)->tituloSedes = $request->tituloSedes;

		$element->translateOrNew($locale)->tituloContactanos = $request->tituloContactanos;
		$element->translateOrNew($newLocale)->tituloContactanos = $request->tituloContactanos;

		$element->translateOrNew($locale)->desContactanos = $request->desContactanos;
		$element->translateOrNew($newLocale)->desContactanos = $request->desContactanos;

		//arrayContactanos
		$element->translateOrNew($locale)->arrayContactanos = $arrayContactanos;
		$element->translateOrNew($newLocale)->arrayContactanos = $arrayContactanos;

		//array2Contactanos
		$element->translateOrNew($locale)->array2Contactanos = $array2Contactanos;
		$element->translateOrNew($newLocale)->array2Contactanos = $array2Contactanos;

		$element->translateOrNew($locale)->tituloGestion = $request->tituloGestion;
		$element->translateOrNew($newLocale)->tituloGestion = $request->tituloGestion;

		$element->translateOrNew($locale)->subtituloGestion = $request->subtituloGestion;
		$element->translateOrNew($newLocale)->subtituloGestion = $request->subtituloGestion;

		$element->translateOrNew($locale)->tituloTrabajo = $request->tituloTrabajo;
		$element->translateOrNew($newLocale)->tituloTrabajo = $request->tituloTrabajo;

		$element->translateOrNew($locale)->subtituloTrabajo = $request->subtituloTrabajo;
		$element->translateOrNew($newLocale)->subtituloTrabajo = $request->subtituloTrabajo;

		$element->translateOrNew($locale)->tituloServiciosB1 = $request->tituloServiciosB1;
		$element->translateOrNew($newLocale)->tituloServiciosB1 = $request->tituloServiciosB1;

		$element->translateOrNew($locale)->subtituloServiciosB1 = $request->subtituloServiciosB1;
		$element->translateOrNew($newLocale)->subtituloServiciosB1 = $request->subtituloServiciosB1;

		$element->translateOrNew($locale)->tituloServiciosB2 = $request->tituloServiciosB2;
		$element->translateOrNew($newLocale)->tituloServiciosB2 = $request->tituloServiciosB2;

		$element->translateOrNew($locale)->desServiciosB2 = $request->desServiciosB2;
		$element->translateOrNew($newLocale)->desServiciosB2 = $request->desServiciosB2;

		$element->translateOrNew($locale)->pdfServiciosB2 = $request->pdfServiciosB2;
		$element->translateOrNew($newLocale)->pdfServiciosB2 = $request->pdfServiciosB2;

		$element->translateOrNew($locale)->tituloSugerencia = $request->tituloSugerencia;
		$element->translateOrNew($newLocale)->tituloSugerencia = $request->tituloSugerencia;

		$element->translateOrNew($locale)->tituloDenuncia = $request->tituloDenuncia;
		$element->translateOrNew($newLocale)->tituloDenuncia = $request->tituloDenuncia;

		$element->translateOrNew($locale)->desDenuncia = $request->desDenuncia;
		$element->translateOrNew($newLocale)->desDenuncia = $request->desDenuncia;

		$element->translateOrNew($locale)->intranet = $request->intranet;
		$element->translateOrNew($newLocale)->intranet = $request->intranet;

		$element->translateOrNew($locale)->tde = $request->tde;
		$element->translateOrNew($newLocale)->tde = $request->tde;
		
		$element->save();
    }
    
    public function editar($id)
    {
        //
    }

	public function actualizar($request, $id)
	{
		$locale = app()->getLocale();
		
		//arrayContactanos
		$columnas_item1 = array(0 => 'tx1A', 1 => 'tx2A', 2 => 'tx3A', 3 => 'tx4A', 4 => 'tx5A');
		$a_item1 = array();
		array_push($a_item1, $request->tx1A);
		array_push($a_item1, $request->tx2A);
		array_push($a_item1, $request->tx3A);
		array_push($a_item1, $request->tx4A);
		array_push($a_item1, $request->tx5A);
        
        if($a_item1[0] != null)
            $arrayContactanos = \Helper::parseArray($a_item1, $columnas_item1);
		else
			$arrayContactanos = null;   
			
		//array2Contactanos
		$columnas_item2 = array(0 => 'tx1A2', 1 => 'tx2A2', 2 => 'tx3A2', 3 => 'tx4A2', 4 => 'tx5A2');
		$a_item2 = array();
		array_push($a_item2, $request->tx1A2);
		array_push($a_item2, $request->tx2A2);
		array_push($a_item2, $request->tx3A2);
		array_push($a_item2, $request->tx4A2);
		array_push($a_item2, $request->tx5A2);
        
        if($a_item2[0] != null)
            $array2Contactanos = \Helper::parseArray($a_item2, $columnas_item2);
		else
            $array2Contactanos = null;     
        
        $element = Info::find($id);
		$element->fill($request->only(			
            'correoWeb',
			'correoFormSuscribete',
			'correoFormContactanos',
			'correoFormSugerencias',
			'correoFormDenuncias',
			'activarIdioma'
		), $id);

		$element->translateOrNew($locale)->enlaceBlog = $request->enlaceBlog;
		$element->translateOrNew($locale)->enlaceTransparencia = $request->enlaceTransparencia;
		$element->translateOrNew($locale)->enlaceCocaleros = $request->enlaceCocaleros;
		$element->translateOrNew($locale)->enlaceFE = $request->enlaceFE;
		$element->translateOrNew($locale)->codEticaPDF = $request->codEticaPDF;
		$element->translateOrNew($locale)->terminosPDF = $request->terminosPDF;
		$element->translateOrNew($locale)->privacidadDatosPDF = $request->privacidadDatosPDF;
		$element->translateOrNew($locale)->facebookEnaco = $request->facebookEnaco;
		$element->translateOrNew($locale)->facebookDelisse = $request->facebookDelisse;
		$element->translateOrNew($locale)->facebookKintu = $request->facebookKintu;
		$element->translateOrNew($locale)->ciudadBase = $request->ciudadBase;
		$element->translateOrNew($locale)->tlfCiudadBase = $request->tlfCiudadBase;
		$element->translateOrNew($locale)->celCiudadBase = $request->celCiudadBase;
		$element->translateOrNew($locale)->ciudadProv = $request->ciudadProv;
		$element->translateOrNew($locale)->tlfCiudadProv = $request->tlfCiudadProv;
		$element->translateOrNew($locale)->celCiudadProv = $request->celCiudadProv;
		$element->translateOrNew($locale)->tituloProductos = $request->tituloProductos;
		$element->translateOrNew($locale)->subtituloProductos = $request->subtituloProductos;
		$element->translateOrNew($locale)->tituloGracias = $request->tituloGracias;
		$element->translateOrNew($locale)->desGracias = $request->desGracias;
		$element->translateOrNew($locale)->tituloGraciasDe = $request->tituloGraciasDe;
		$element->translateOrNew($locale)->desGraciasDe = $request->desGraciasDe;
		$element->translateOrNew($locale)->tituloSedes = $request->tituloSedes;
		$element->translateOrNew($locale)->tituloContactanos = $request->tituloContactanos;
		$element->translateOrNew($locale)->desContactanos = $request->desContactanos;
		$element->translateOrNew($locale)->arrayContactanos = $arrayContactanos; //arrayContactanos
		$element->translateOrNew($locale)->array2Contactanos = $array2Contactanos; //array2Contactanos
		$element->translateOrNew($locale)->tituloGestion = $request->tituloGestion;
		$element->translateOrNew($locale)->subtituloGestion = $request->subtituloGestion;
		$element->translateOrNew($locale)->tituloTrabajo = $request->tituloTrabajo;
		$element->translateOrNew($locale)->subtituloTrabajo = $request->subtituloTrabajo;
		$element->translateOrNew($locale)->tituloServiciosB1 = $request->tituloServiciosB1;
		$element->translateOrNew($locale)->subtituloServiciosB1 = $request->subtituloServiciosB1;
		$element->translateOrNew($locale)->tituloServiciosB2 = $request->tituloServiciosB2;
		$element->translateOrNew($locale)->desServiciosB2 = $request->desServiciosB2;
		$element->translateOrNew($locale)->pdfServiciosB2 = $request->pdfServiciosB2;
		$element->translateOrNew($locale)->tituloSugerencia = $request->tituloSugerencia;
		$element->translateOrNew($locale)->tituloDenuncia = $request->tituloDenuncia;
		$element->translateOrNew($locale)->desDenuncia = $request->desDenuncia;
		$element->translateOrNew($locale)->intranet = $request->intranet;
		$element->translateOrNew($locale)->tde = $request->tde;

		$element->save();
	}

	public function eliminar($id)
	{
		//
	}

	public function ddlActivarIdioma()
	{		
        $array = array();
		$array[0] = 'No';
		$array[1] = 'Sí';		
        return $array;
	}
}