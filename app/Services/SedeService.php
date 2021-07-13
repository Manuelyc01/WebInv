<?php

namespace App\Services;

use App\Models\Sede;

class SedeService
{
    public function listar()
	{
        $element = Sede::orderBy('id_sede', 'ASC')->get();
		return $element;
	}

	public function registrar($request)
	{   
        $element= new Sede();
        $element->co_sede=$request->get('co_sede');
        $element->no_sede=$request->get('no_sede');
        $element->de_sede=$request->get('de_sede');
         
        $element->save();

    }
    
    public function editar($id_sede)
    {
        $element = Sede::find($id_sede);
		return $element;
    }

	public function actualizar($request, $id_sede)
	{
        
        $element = Sede::find($id_sede);

        $element->co_sede=$request->get('co_sede');
        $element->no_sede=$request->get('no_sede');
        $element->de_sede=$request->get('de_sede');
               
        $element->save();
        
	}

	public function eliminar($id)
	{
		Sede::destroy($id);
	}

	
}