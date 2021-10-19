<?php

namespace App\Services;

use App\Models\Solicitudes;

class SolicitudesService
{
    public function listar()
	{
        $element = Solicitudes::orderBy('id_solicitud', 'ASC')->get();
		return $element;
	}
    
	public function registrar($request)
	{
        
        $element= new Solicitudes();
        
        $element->cod_solicitud=$request->get('cod_solicitud');
        $element->nom_solicitud=$request->get('nom_solicitud');
        $element->esta_solicitud=$request->get('esta_solicitud');
             
        $element->save();
    }
    
    public function editar($id_solicitud)
    {
        
        $element = Solicitudes::find($id_solicitud);
        return $element;
    }

	public function actualizar($request, $id_solicitud)
	{
        
        $element = Solicitudes::find($id_solicitud);

        $element->cod_solicitud=$request->get('cod_solicitud');
        $element->nom_solicitud=$request->get('nom_solicitud');
        $element->esta_solicitud=$request->get('esta_solicitud');
        
          
        $element->save();
        
	}

	public function eliminar($id)
	{
        Solicitudes::destroy($id);
	}

	
}