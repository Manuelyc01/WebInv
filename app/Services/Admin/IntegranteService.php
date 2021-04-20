<?php

namespace App\Services\Admin;

use App\Models\{Integrante, Cargo, Niveles};

class IntegranteService
{
    public function listar()
	{
        $element = Integrante::all();
		return $element;
	}

	public function registrar($request)
	{
        $locale = app()->getLocale();
        $locale == 'es' ? $newLocale = 'en' : $newLocale = 'es';

        $element = Integrante::create($request->only(
			'imagen',			
			'orden',
			'cargo_id',
			'niveles_id'
		));

		$element->translateOrNew($locale)->nombreCompleto = $request->nombreCompleto;
		$element->translateOrNew($newLocale)->nombreCompleto = $request->nombreCompleto;

		$element->translateOrNew($locale)->telefono = $request->telefono;
		$element->translateOrNew($newLocale)->telefono = $request->telefono;

		$element->translateOrNew($locale)->correo = $request->correo;
		$element->translateOrNew($newLocale)->correo = $request->correo;

		$element->translateOrNew($locale)->direccion = $request->direccion;
		$element->translateOrNew($newLocale)->direccion = $request->direccion;

		$element->translateOrNew($locale)->des = $request->des;
		$element->translateOrNew($newLocale)->des = $request->des;
		
		$element->save();
    }
    
    public function editar($id)
    {
        $element = Integrante::find($id);
		return $element;
    }

	public function actualizar($request, $id)
	{
        $locale = app()->getLocale();
        
        $element = Integrante::find($id);
		$element->fill($request->only(			
            'imagen',			
			'orden',
			'cargo_id',
			'niveles_id'
		), $id);

		$element->translateOrNew($locale)->nombreCompleto = $request->nombreCompleto;
		$element->translateOrNew($locale)->telefono = $request->telefono;
		$element->translateOrNew($locale)->correo = $request->correo;
		$element->translateOrNew($locale)->direccion = $request->direccion;
		$element->translateOrNew($locale)->des = $request->des;
		
		$element->save();
	}

	public function eliminar($id)
	{
		Integrante::destroy($id);
	}

	public function ddlCargo()
	{
		$items = Cargo::All();
        $array = array();
        $array[0] = '-- seleccione --';
		foreach ($items as $c) {
			$c->nombre ? $value = $c->nombre : $value = '-';
			$array[$c->id] = $value;
		}
        return $array;
	}

	public function ddlNiveles()
	{
		$items = Niveles::All();
        $array = array();
        $array[0] = '-- seleccione --';
		foreach ($items as $c) {
			$c->nombre ? $value = $c->nombre : $value = '-';
			$array[$c->id] = $value;
		}
        return $array;
	}

	
}