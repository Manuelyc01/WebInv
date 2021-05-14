<?php

namespace App\Services\Admin;

use App\Models\BannerClientes;

class BannerClientesService
{
    public function listar()
	{
        $element = BannerClientes::orderBy('orden', 'ASC')->get();
		return $element;
	}

	public function registrar($request)
	{
        $locale = app()->getLocale();
        $locale == 'es' ? $newLocale = 'en' : $newLocale = 'es';

        $element = BannerClientes::create($request->only(			
            'orden'
		));

		$element->translateOrNew($locale)->fondoDesktop = $request->fondoDesktop;
        $element->translateOrNew($newLocale)->fondoDesktop = $request->fondoDesktop;

		$element->translateOrNew($locale)->des = $request->des;
		$element->translateOrNew($newLocale)->des = $request->des;
        
		$element->save();
    }
    
    public function editar($id)
    {
        $element = BannerClientes::find($id);
		return $element;
    }

	public function actualizar($request, $id)
	{
        $locale = app()->getLocale();
        
        $element = BannerClientes::find($id);
		$element->fill($request->only(			
            'orden'
		), $id);

		$element->translateOrNew($locale)->fondoDesktop = $request->fondoDesktop;
		$element->translateOrNew($locale)->des = $request->des;
		
		$element->save();
	}

	public function eliminar($id)
	{
		BannerClientes::destroy($id);
	}

	
}