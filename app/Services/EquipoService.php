<?php

namespace App\Services;

use App\Models\Equipo;
use App\Models\OfiTrabajadorEquipo;
use App\Models\MantenimientoService;
use App\Services\ImagenService;
use App\Services\DocumentoService; 
use DB;
class EquipoService
{
    private $servImg;
    private $servDoc;
    
    public function __construct(ImagenService $servImg, DocumentoService $servDoc)
    {
        $this->servImg = $servImg;
        $this->servDoc = $servDoc;
    }

    public function listar()
	{
        $element = Equipo::join('tm_categoria_equipos','tm_categoria_equipos.id_cat_equipos','=','tm_equipos.id_cat_equipos')
            ->select('tm_equipos.*','tm_categoria_equipos.*')    
            ->where('esta_equipo','=',1)->orderBy('id_equipo', 'ASC')->get();
		return $element;
	}
    public function listarDisponibles()
	{
        $element = Equipo::join('tm_categoria_equipos','tm_categoria_equipos.id_cat_equipos','=','tm_equipos.id_cat_equipos')
            ->select('tm_equipos.*','tm_categoria_equipos.*')    
            ->where('esta_equipo','=',1)
            ->whereNotExists(function($query)
                {
                    $query->select(DB::raw(1))
                          ->from('tm_ofi_traba_equipo')
                          ->whereRaw('tm_equipos.id_equipo = tm_ofi_traba_equipo.id_equipo');
                })
            ->orderBy('id_equipo', 'ASC')->get();
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
        //guardar imagenes o documentos si existen
        if($request->hasfile('imagenes')){
            $imagenes = $request->file('imagenes');
            $this->servImg->registrar($imagenes,$element->id_equipo);
         }
        if($request->hasfile('documentos')){
            $documentos=$request->file('documentos');
            $this->servDoc->registrar($documentos,$element->id_equipo);
        }
       
    }
    public function show($id_equipo)
    {
        $element = Equipo::find($id_equipo);
        return $element;
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
        if($request->hasfile('imagenes')){
            $imagenes = $request->file('imagenes');
            $this->servImg->registrar($imagenes,$element->id_equipo);
        }
        if($request->hasfile('documentos')){
            $documentos = $request->file('documentos');
            $this->servDoc->registrar($documentos,$id_equipo);
        }

        $element->save();
	}

	public function eliminar($id)
	{
        $element = Equipo::find($id);
        $element->esta_equipo= 0;
        $element->save();
	}
    //pdf
    public function asignaciones($id)
	{
        $element = Equipo::join('tm_ofi_traba_equipo','tm_ofi_traba_equipo.id_equipo','=','tm_equipos.id_equipo')
            ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_ofi_traba_equipo.id_ofi_trabajador')
            ->join('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')
            ->select('tm_equipos.*','tm_ofi_traba_equipo.*','tm_colaborador.*')    
            ->where('tm_equipos.id_equipo',$id)//->orderBy('id_equipo', 'ASC')->get();
            ->orderBy('tm_ofi_traba_equipo.created_at', 'desc')->get();
		return $element;
	}  

    public function mantenimientos($id)
	{
        $element = Equipo::join('tm_ofi_traba_equipo','tm_ofi_traba_equipo.id_equipo','=','tm_equipos.id_equipo')
            ->join('tm_mantenimiento','tm_mantenimiento.id_ofi_traba_equipo','=','tm_ofi_traba_equipo.id_ofi_traba_equipo')
            ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_ofi_traba_equipo.id_ofi_trabajador')
            ->join('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')
            ->select('tm_equipos.*','tm_ofi_traba_equipo.*','tm_mantenimiento.*','tm_colaborador.*')    
            ->where('tm_equipos.id_equipo',$id)//->orderBy('id_equipo', 'ASC')->get();
            ->orderBy('tm_equipos.id_equipo', 'desc')->get();
		return $element;
	}  

	
}