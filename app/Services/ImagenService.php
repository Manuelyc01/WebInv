<?php

namespace App\Services;

use App\Models\Imagen;

class ImagenService
{
    public function getById($id){
        $imagen=Imagen::find($id);
        return $imagen;
    }
    public function listar()
	{
	}
    public function getByEquipo($id)
	{
        $imagenes=Imagen::where('id_equipo','=',$id)->where('esta_imagen','=',1)->orderBy('id', 'ASC')->get();
        return $imagenes;
    }

	public function registrar($imagenes,$id_equipo)
	{
        foreach($imagenes as $imagen){
            $name = time().'_'.$imagen->getClientOriginalName();
            $ruta=public_path().'/uploads/equipos';
            $imagen->move($ruta,$name);
            
            $element = new Imagen();
            $element->nombre=$name;
            $element->url='/uploads/equipos'.'/'.$name;
            $element->id_equipo=$id_equipo;
            $element->esta_imagen=1;
            $element->save();
        }
    }
    
    public function editar($id_equipo)
    {
    }

	public function actualizar($request, $id_equipo)
	{
	}

	public function eliminar($id)
	{
        $element=Imagen::find($id);
        $element->esta_imagen=0;
        $element->save();
	}

	
}