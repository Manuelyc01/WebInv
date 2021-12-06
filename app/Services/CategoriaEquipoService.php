<?php

namespace App\Services;

use App\Models\CategoriaEquipo;

class CategoriaEquipoService
{
    public function listar()
	{
        $element = CategoriaEquipo::orderBy('id_cat_equipos', 'ASC')
        ->where('esta_cate_equipo','>',-1)
                        
        ->get();
		return $element;
	}

	public function registrar($request)
	{
        $element= new CategoriaEquipo();
        
        $element->des_cate_equipo=$request->get('des_cate_equipo');
        $element->esta_cate_equipo=$request->get('esta_cate_equipo');
             
        $element->save();
    }
    
    public function editar($id_cat_equipos)
    {
        
        $element = CategoriaEquipo::find($id_cat_equipos);
        return $element;
    }

	public function actualizar($request, $id_cat_equipos)
	{
        
        $element = CategoriaEquipo::find($id_cat_equipos);

        $element->des_cate_equipo=$request->get('des_cate_equipo');
        $element->esta_cate_equipo=$request->get('esta_cate_equipo');
        
          
        $element->save();
        
	}

	public function eliminar($id)
	{
        $element = CategoriaEquipo::find($id);

        $element->esta_cate_equipo=-1;
        
        $element->save();
	}

	
}