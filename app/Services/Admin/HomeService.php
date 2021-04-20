<?php

namespace App\Services\Admin;

use App\Models\Home;

class HomeService
{
    public function listar()
	{
        $element = Home::first();
		return $element;
	}

	public function registrar($request)
	{
        $locale = app()->getLocale();
        $locale == 'es' ? $newLocale = 'en' : $newLocale = 'es';

        $element = Home::create($request->only(			
            'imgIzqB2',
            'imgDerB2',
            'imgHojaB3',
            'imgFondoB4',
            'coverVideoB4',
            'imgHojaB5'
		));

		$element->translateOrNew($locale)->tituloB2 = $request->tituloB2;
		$element->translateOrNew($newLocale)->tituloB2 = $request->tituloB2;

		$element->translateOrNew($locale)->desB2 = $request->desB2;
		$element->translateOrNew($newLocale)->desB2 = $request->desB2;

		$element->translateOrNew($locale)->textoBtnB2 = $request->textoBtnB2;
        $element->translateOrNew($newLocale)->textoBtnB2 = $request->textoBtnB2;
        
        $element->translateOrNew($locale)->tituloB3 = $request->tituloB3;
        $element->translateOrNew($newLocale)->tituloB3 = $request->tituloB3;
        
        $element->translateOrNew($locale)->subtituloB3 = $request->subtituloB3;
        $element->translateOrNew($newLocale)->subtituloB3 = $request->subtituloB3;
        
        $element->translateOrNew($locale)->tituloB4 = $request->tituloB4;
        $element->translateOrNew($newLocale)->tituloB4 = $request->tituloB4;
        
        $element->translateOrNew($locale)->desB4 = $request->desB4;
        $element->translateOrNew($newLocale)->desB4 = $request->desB4;
        
        $element->translateOrNew($locale)->enlaceVideoB4 = $request->enlaceVideoB4;
        $element->translateOrNew($newLocale)->enlaceVideoB4 = $request->enlaceVideoB4;
        
        $element->translateOrNew($locale)->textoBtnB4 = $request->textoBtnB4;
        $element->translateOrNew($newLocale)->textoBtnB4 = $request->textoBtnB4;
        
        $element->translateOrNew($locale)->tituloB5 = $request->tituloB5;
        $element->translateOrNew($newLocale)->tituloB5 = $request->tituloB5;
        
        $element->translateOrNew($locale)->subtituloB5 = $request->subtituloB5;
        $element->translateOrNew($newLocale)->subtituloB5 = $request->subtituloB5;
        
        $element->translateOrNew($locale)->textoBtnB5 = $request->textoBtnB5;
        $element->translateOrNew($newLocale)->textoBtnB5 = $request->textoBtnB5;
        
        $element->translateOrNew($locale)->enlaceBtnB5 = $request->enlaceBtnB5;
        $element->translateOrNew($newLocale)->enlaceBtnB5 = $request->enlaceBtnB5;
        
        $element->translateOrNew($locale)->tituloB6 = $request->tituloB6;
        $element->translateOrNew($newLocale)->tituloB6 = $request->tituloB6;
        
        $element->translateOrNew($locale)->placeHolderB6 = $request->placeHolderB6;
        $element->translateOrNew($newLocale)->placeHolderB6 = $request->placeHolderB6;
        
        $element->translateOrNew($locale)->textoBtnB6 = $request->textoBtnB6;
		$element->translateOrNew($newLocale)->textoBtnB6 = $request->textoBtnB6;
		
		$element->save();
    }
    
    public function editar($id)
    {
        //
    }

	public function actualizar($request, $id)
	{
        $locale = app()->getLocale();
        
        $element = Home::find($id);
		$element->fill($request->only(			
            'imgIzqB2',
            'imgDerB2',
            'imgHojaB3',
            'imgFondoB4',
            'coverVideoB4',
            'imgHojaB5'
		), $id);

		$element->translateOrNew($locale)->tituloB2 = $request->tituloB2;
		$element->translateOrNew($locale)->desB2 = $request->desB2;
		$element->translateOrNew($locale)->textoBtnB2 = $request->textoBtnB2;
        $element->translateOrNew($locale)->tituloB3 = $request->tituloB3;
        $element->translateOrNew($locale)->subtituloB3 = $request->subtituloB3;
        $element->translateOrNew($locale)->tituloB4 = $request->tituloB4;
        $element->translateOrNew($locale)->desB4 = $request->desB4;
        $element->translateOrNew($locale)->enlaceVideoB4 = $request->enlaceVideoB4;
        $element->translateOrNew($locale)->textoBtnB4 = $request->textoBtnB4;
        $element->translateOrNew($locale)->tituloB5 = $request->tituloB5;
        $element->translateOrNew($locale)->subtituloB5 = $request->subtituloB5;
        $element->translateOrNew($locale)->textoBtnB5 = $request->textoBtnB5;
        $element->translateOrNew($locale)->enlaceBtnB5 = $request->enlaceBtnB5;
        $element->translateOrNew($locale)->tituloB6 = $request->tituloB6;
        $element->translateOrNew($locale)->placeHolderB6 = $request->placeHolderB6;
        $element->translateOrNew($locale)->textoBtnB6 = $request->textoBtnB6;

		$element->save();
	}

	public function eliminar($id)
	{
		//
	}
}