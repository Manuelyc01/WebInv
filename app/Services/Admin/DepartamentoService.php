<?php

namespace App\Services\Admin;

use App\Models\Departamento;

class DepartamentoService
{
    public function listar()
	{
        $element = Departamento::all();
		return $element;
	}

	public function registrar($request)
	{
        $locale = app()->getLocale();
        $locale == 'es' ? $newLocale = 'en' : $newLocale = 'es';

        $element = Departamento::create();

		$element->translateOrNew($locale)->nombre = $request->nombre;
        $element->translateOrNew($newLocale)->nombre = $request->nombre;

		$element->save();
    }
    
    public function editar($id)
    {
        $element = Departamento::find($id);
		return $element;
    }

	public function actualizar($request, $id)
	{
        $locale = app()->getLocale();
        
        $element = Departamento::find($id);		

		$element->translateOrNew($locale)->nombre = $request->nombre;
		
		$element->save();
	}

	public function eliminar($id)
	{
		Departamento::destroy($id);
	}

	
}