<?php

namespace App\Services\Admin;

use App\Models\ContactoDenuncia;

class ContactoDenunciaService
{
    public function listar()
	{
        $element = ContactoDenuncia::orderBy('id', 'DESC')->get();
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
		ContactoDenuncia::destroy($id);
	}
}