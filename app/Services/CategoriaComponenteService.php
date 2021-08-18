<?php

namespace App\Services;

use App\Models\CategoriaComponente;

class CategoriaComponenteService
{
    public function listar()
	{
        $element = CategoriaComponente::orderBy('id_cat_componentes', 'ASC')->get();
		return $element;
	}

	public function registrar($request)
	{
        $element= new CategoriaComponente();
        
        $element->des_cate_componentes=$request->get('des_cate_componentes');
        $element->esta_cate_componentes=$request->get('esta_cate_componentes');
             
        $element->save();
    }
    
    public function editar($id_cat_componentes)
    {
        
        $element = CategoriaComponente::find($id_cat_componentes);
        return $element;
    }

	public function actualizar($request, $id_cat_componentes)
	{
        
        $element = CategoriaComponente::find($id_cat_componentes);
        $element->des_cate_componentes=$request->get('des_cate_componentes');
        $element->esta_cate_componentes=$request->get('esta_cate_componentes');
        $element->save();
        
	}

	public function eliminar($id)
	{
        CategoriaComponente::destroy($id);
	}

	
}