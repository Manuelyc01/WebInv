<?php

namespace App\Services\Admin;

use App\Models\Banner;

class BannerService
{
    public function listar()
	{
        $element = Banner::orderBy('orden', 'ASC')->get();
		return $element;
	}

	public function registrar($request)
	{
        $locale = app()->getLocale();
        $locale == 'es' ? $newLocale = 'en' : $newLocale = 'es';

        $element = Banner::create($request->only(			
            'orden'
		));

		$element->translateOrNew($locale)->fondoDesktop = $request->fondoDesktop;
        $element->translateOrNew($newLocale)->fondoDesktop = $request->fondoDesktop;

		$element->translateOrNew($locale)->fondoMobile = $request->fondoMobile;
        $element->translateOrNew($newLocale)->fondoMobile = $request->fondoMobile;
        
        $element->translateOrNew($locale)->enlaceBtn = $request->enlaceBtn;
        $element->translateOrNew($newLocale)->enlaceBtn = $request->enlaceBtn;

        $element->translateOrNew($locale)->enlaceFacebook = $request->enlaceFacebook;
        $element->translateOrNew($newLocale)->enlaceFacebook = $request->enlaceFacebook;

        $element->translateOrNew($locale)->enlaceInstagram = $request->enlaceInstagram;
        $element->translateOrNew($newLocale)->enlaceInstagram = $request->enlaceInstagram;

        $element->translateOrNew($locale)->enlaceWhatsapp = $request->enlaceWhatsapp;
        $element->translateOrNew($newLocale)->enlaceWhatsapp = $request->enlaceWhatsapp;
        
        $element->translateOrNew($locale)->textoBtn = $request->textoBtn;
		$element->translateOrNew($newLocale)->textoBtn = $request->textoBtn;

		$element->translateOrNew($locale)->des = $request->des;
		$element->translateOrNew($newLocale)->des = $request->des;

		$element->translateOrNew($locale)->titulo = $request->titulo;
		$element->translateOrNew($newLocale)->titulo = $request->titulo;

		$element->save();
    }
    
    public function editar($id)
    {
        $element = Banner::find($id);
		return $element;
    }

	public function actualizar($request, $id)
	{
        $locale = app()->getLocale();
        
        $element = Banner::find($id);
		$element->fill($request->only(			
            'orden'
		), $id);

		$element->translateOrNew($locale)->fondoDesktop = $request->fondoDesktop;
		$element->translateOrNew($locale)->fondoMobile = $request->fondoMobile;        
        $element->translateOrNew($locale)->enlaceBtn = $request->enlaceBtn;        

        $element->translateOrNew($locale)->enlaceFacebook = $request->enlaceFacebook; 
        $element->translateOrNew($locale)->enlaceInstagram = $request->enlaceInstagram;   
        $element->translateOrNew($locale)->enlaceWhatsapp = $request->enlaceWhatsapp; 
               
        $element->translateOrNew($locale)->textoBtn = $request->textoBtn;
		$element->translateOrNew($locale)->des = $request->des;
		$element->translateOrNew($locale)->titulo = $request->titulo;
		
		$element->save();
	}

	public function eliminar($id)
	{
		Banner::destroy($id);
	}

	
}