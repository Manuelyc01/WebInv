<?php

namespace App\Services\Admin;

use App\Models\ContactoGlobal;

class ContactoGlobalService
{
    public function listar()
	{
        $element = ContactoGlobal::orderBy('id', 'DESC')->get();
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
		ContactoGlobal::destroy($id);
	}
}