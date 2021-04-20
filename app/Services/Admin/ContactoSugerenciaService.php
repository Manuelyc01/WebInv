<?php

namespace App\Services\Admin;

use App\Models\ContactoSugerencia;

class ContactoSugerenciaService
{
    public function listar()
	{
        $element = ContactoSugerencia::orderBy('id', 'DESC')->get();
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
		ContactoSugerencia::destroy($id);
	}
}