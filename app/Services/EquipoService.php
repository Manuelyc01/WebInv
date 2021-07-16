<?php

namespace App\Services;

use App\Models\Equipo;
use App\Services\ImagenService; 

class EquipoService
{
    private $servImg;
    public function __construct(ImagenService $servImg)
    {
        $this->servImg = $servImg;
    }

    public function listar()
	{
        $element = Equipo::where('esta_equipo','=',1)->orderBy('id_equipo', 'ASC')->get();
		return $element;
	}

	public function registrar($request)
	{
        $element= new Equipo();

        
        $element->serie_equipo=$request->get('serie_equipo');
        $element->cod_opatrimonial=$request->get('cod_opatrimonial');
        $element->des_equipo=$request->get('des_equipo');
        $element->tipoBien=$request->get('tipoBien');
        $element->esta_equipo= 1;
        $element->id_cat_equipos=$request->get('id_cat_equipos');
        
        $element->save();
        
        if($request->hasfile('imagenes')){
            $imagenes = $request->file('imagenes');
            $this->servImg->registrar($imagenes,$element->id_equipo);
         }
    }
    
    public function editar($id_equipo)
    {
        $element = Equipo::find($id_equipo);
        return $element;
    }

	public function actualizar($request, $id_equipo)
	{
        
        $element = Equipo::find($id_equipo);

        $element->serie_equipo=$request->get('serie_equipo');
        $element->cod_opatrimonial=$request->get('cod_opatrimonial');
        $element->des_equipo=$request->get('des_equipo');
        $element->tipoBien=$request->get('tipoBien');
        $element->id_cat_equipos=$request->get('id_cat_equipos');

        $element->save();
	}

	public function eliminar($id)
	{
        $element = Equipo::find($id);
        $element->esta_equipo= 0;
        $element->save();
	}

	
}