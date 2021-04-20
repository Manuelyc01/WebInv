<?php

namespace App\Services\Admin;

use App\Models\ContactoSuscripcion;

class ContactoSuscripcionService
{
    public function listar()
	{
        $element = ContactoSuscripcion::orderBy('id', 'DESC')->get();
		return $element;
	}

	public function registrar($request)
	{
        //
    }
    
    public function editar($id)
    {
        //
    }

	public function actualizar($request, $id)
	{
        //
	}

	public function eliminar($id)
	{
		ContactoSuscripcion::destroy($id);
	}
}