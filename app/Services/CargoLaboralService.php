<?php

namespace App\Services;

use App\Models\CargoLaboral;

class CargoLaboralService
{
    public function listar()
	{
        $element = CargoLaboral::orderBy('id_cargo_laboral', 'ASC')->get();
		return $element;
	}
	public function registrar($request)
	{
        $element= new CargoLaboral();
        
        $element->co_cargo_laboral=$request->get('co_cargo_laboral');
        $element->no_cargo_laboral=$request->get('no_cargo_laboral');
        $element->de_cargo_laboral=$request->get('de_cargo_laboral');
             
        $element->save();
    }
    
    public function editar($id_cargo_laboral)
    {
        
        $element = CargoLaboral::find($id_cargo_laboral);
        return $element;
    }

	public function actualizar($request, $id_cargo_laboral)
	{
        
        $element = CargoLaboral::find($id_cargo_laboral);

        $element->co_cargo_laboral=$request->get('co_cargo_laboral');
        $element->no_cargo_laboral=$request->get('no_cargo_laboral');
        $element->de_cargo_laboral=$request->get('de_cargo_laboral');
        
          
        $element->save();
        
	}

	public function eliminar($id)
	{
        CargoLaboral::destroy($id);
	}

	
}