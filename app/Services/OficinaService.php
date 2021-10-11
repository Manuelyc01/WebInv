<?php

namespace App\Services;

use App\Models\ColaboradorUbicacion;
use App\Models\Oficina;

class OficinaService
{
    public function listar()
	{
        $element = Oficina::orderBy('id_oficina', 'ASC')->get();
		return $element;
	}
    public function listarPorSedes($id_colaborador)
	{
        $listado = collect();
                $col=ColaboradorUbicacion::where('tm_colaborador_ubicacion.id_colaborador','=',$id_colaborador)
                        ->where('tm_colaborador_ubicacion.estado','=',1)->get();
        for($i = 0; $i < count($col); $i++){
            $element = Oficina::join('tm_sede', 'tm_sede.id_sede', '=', 'tm_oficina.id_sede')
                ->select('tm_sede.*','tm_oficina.*')
                ->where('tm_oficina.id_sede','=',$col[$i]->id_sede)
                ->orderBy('tm_oficina.id_oficina', 'ASC')->get();
                $listado=$listado->merge($element);
        }
        
		return $listado;
	}
	public function registrar($request)
	{
        $element= new Oficina();
        
        $element->id_sede=$request->get('id_sede');
        $element->co_oficina=$request->get('co_oficina');
        $element->no_oficina=$request->get('no_oficina');
        $element->de_oficina=$request->get('de_oficina');
          
        $element->save();
    }
    
    public function editar($id_oficina)
    {
        $element = Oficina::find($id_oficina);
        return $element;
    }

	public function actualizar($request, $id_oficina)
	{
        
        $element = Oficina::find($id_oficina);

        $element->id_sede=$request->get('id_sede');
        $element->co_oficina=$request->get('co_oficina');
        $element->no_oficina=$request->get('no_oficina');
        $element->de_oficina=$request->get('de_oficina');
          
        $element->save();
	}

	public function eliminar($id)
	{
        Oficina::destroy($id);
	}

	
}