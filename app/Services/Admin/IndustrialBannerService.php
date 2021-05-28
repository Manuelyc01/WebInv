<?php

namespace App\Services\Admin;

use App\Models\IndustrialBanner;

class IndustrialBannerService
{
    public function listar()
	{
        $element = IndustrialBanner::orderBy('orden', 'ASC')->get();
		return $element;
	}

	public function registrar($request)
	{
        $locale = app()->getLocale();
        $locale == 'es' ? $newLocale = 'en' : $newLocale = 'es';

        $element = IndustrialBanner::create($request->only(			
            'orden'
		));
		$element->translateOrNew($locale)->banner = $request->banner;
		$element->save();
    }
    public function editar($id)
    {
        //
		$element = IndustrialBanner::find($id);
		return $element;
    }

	public function actualizar($request, $id)
	{
        $locale = app()->getLocale();
        
        $element = IndustrialBanner::find($id);
		$element->fill($request->only(			
            'orden'
		), $id);

		$element->translateOrNew($locale)->banner = $request->banner;
		$element->save();
	}

	public function eliminar($id)
	{
		IndustrialBanner::destroy($id);
	}
}