<?php

namespace App\Services;

use App\Models\Componente;
use App\Services\ImagenService; 
use App\Services\DocumentoService; 
class ComponenteService
{
    private $servImg;
    private $servDoc;
    public function __construct(ImagenService $servImg,DocumentoService $servDoc)
    {
        $this->servImg = $servImg;
        $this->servDoc = $servDoc;
    }
    public function listar()
	{
        $element = Componente::join('tm_categoria_componentes','tm_categoria_componentes.id_cat_componentes','=','tm_componentes.id_cat_componentes')
                ->select('tm_componentes.*','tm_categoria_componentes.des_cate_componentes')->get();
		return $element;
	}

	public function registrar($request)
	{   
        $element= new Componente();
        $element->serie_componente=$request->get('serie_componente');
        $element->des_componente=$request->get('des_componente');
        $element->esta_componente= $request->get('esta_componente');
        $element->id_cat_componentes=$request->get('id_cat_componentes');
        $element->save();

        //guardar imagenes si existen
        if($request->hasfile('imagenes')){
            $imagenes = $request->file('imagenes');
            $this->servDoc->registrarComponente($imagenes,$element->id_componente);
        }
        if($request->hasfile('documentos')){
            $imagenes = $request->file('documentos');
            $this->servImg->registrarComponente($imagenes,$element->id_componente);
        }
    }
    public function show($id_componente)
    {
        $element = Componente::find($id_componente);
        return $element;
    }

    public function editar($id_componente)
    {
        $element = Componente::find($id_componente);
        return $element;
    }

	public function actualizar($request, $id_componente)
	{
        
        $element = Componente::find($id_componente);

        $element->serie_componente=$request->get('serie_componente');
        $element->des_componente=$request->get('des_componente');
        $element->esta_componente= $request->get('esta_componente');
        $element->id_cat_componentes=$request->get('id_cat_componentes');

        if($request->hasfile('documentos')){
            $documentos = $request->file('documentos');
            $this->servDoc->registrarComponente($documentos,$id_componente);
        }
        if($request->hasfile('imagenes')){
            $imagenes = $request->file('imagenes');
            $this->servImg->registrarComponente($imagenes,$id_componente);
        }
        $element->save();
	}

	public function eliminar($id)
	{
        $element = Componente::find($id);
        $element->esta_equipo= 0;
        $element->save();
	}

	
}