<?php

namespace App\Services;
use App\Services\ImagenService;
use App\Services\DocumentoService; 
use DB;
use App\Models\Mantenimiento;

class MantenimientoService
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
        $element = Mantenimiento::join('tm_ofi_traba_equipo','tm_ofi_traba_equipo.id_ofi_traba_equipo','=','tm_mantenimiento.id_ofi_traba_equipo')
            ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_ofi_traba_equipo.id_ofi_trabajador')
            ->join('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')
            ->join('tm_equipos','tm_equipos.id_equipo','=','tm_ofi_traba_equipo.id_equipo')
            //->join('tm_soli_ofi_equi_traba','tm_soli_ofi_equi_traba.id_soli_ofi_equi_tra','=','tm_mantenmiento.id_soli_ofi_equi_tra')
            ->select('tm_mantenimiento.*','tm_ofi_traba_equipo.*','tm_ofi_trabajador.*','tm_colaborador.*','tm_equipos.*')
            ->where('tm_mantenimiento.estado','>',-1)    
            ->orderBy('id_mantenimiento', 'ASC')->get();
		return $element;
	}
    public function listarByEquiTrabaEqui($id)
	{
        $element = Mantenimiento::join('tm_ofi_traba_equipo','tm_ofi_traba_equipo.id_ofi_traba_equipo','=','tm_mantenimiento.id_ofi_traba_equipo')
            ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_ofi_traba_equipo.id_ofi_trabajador')
            ->join('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')
            ->join('tm_equipos','tm_equipos.id_equipo','=','tm_ofi_traba_equipo.id_equipo')
            //->join('tm_soli_ofi_equi_traba','tm_soli_ofi_equi_traba.id_soli_ofi_equi_tra','=','tm_mantenmiento.id_soli_ofi_equi_tra')
            ->select('tm_mantenimiento.*','tm_ofi_traba_equipo.*','tm_ofi_trabajador.*','tm_colaborador.*','tm_equipos.*')
            ->where('tm_mantenimiento.id_ofi_traba_equipo','=',$id)
            ->where('tm_mantenimiento.estado','>',-1)    
            ->orderBy('id_mantenimiento', 'ASC')->get();
		return $element;
	}

	public function registrar($request)
	{
        $element= new Mantenimiento();
        
        $element->descripcion=$request->get('descripcion');
        $element->estado=$request->get('estado');
        $element->id_ofi_traba_equipo=$request->get('id_ofi_traba_equipo');
        $element->id_soli_ofi_equi_tra=$request->get('id_soli_ofi_equi_tra');
        $element->save();
        
        if($request->hasfile('imagenes')){
            $imagenes = $request->file('imagenes');
            $this->servImg->registrarMantenimiento($imagenes,$element->id_mantenimiento);
         }
        if($request->hasfile('documentos')){
            $documentos=$request->file('documentos');
            $this->servDoc->registrarMantenimiento($documentos,$element->id_mantenimiento);
        } 
        
    }
    
    public function editar($id_mantenimiento)
    {
        $e=Mantenimiento::join('tm_ofi_traba_equipo','tm_ofi_traba_equipo.id_ofi_traba_equipo','=','tm_mantenimiento.id_ofi_traba_equipo')
                        ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_ofi_traba_equipo.id_ofi_trabajador')
                        ->join('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')
                        ->join('tm_equipos','tm_equipos.id_equipo','=','tm_ofi_traba_equipo.id_equipo')
                        //->join('tm_soli_ofi_equi_traba','tm_soli_ofi_equi_traba.id_soli_ofi_equi_tra','=','tm_mantenmiento.id_soli_ofi_equi_tra')
                        ->select('tm_mantenimiento.*','tm_ofi_traba_equipo.*','tm_ofi_trabajador.*','tm_colaborador.*','tm_equipos.*')
                        ->where('tm_mantenimiento.id_mantenimiento','=',$id_mantenimiento)
                        ->first();
        return $e;
    }

	public function actualizar($request, $id_mantenimiento)
	{
        
        $element = Mantenimiento::find($id_mantenimiento);

        $element->descripcion=$request->get('descripcion');
        $element->estado=$request->get('estado');
        $element->id_soli_ofi_equi_tra=$request->get('id_soli_ofi_equi_tra');
          
        $element->save();

        if($request->hasfile('imagenes')){
            $imagenes = $request->file('imagenes');
            $this->servImg->registrarMantenimiento($imagenes,$id_mantenimiento);
         }
        if($request->hasfile('documentos')){
            $documentos=$request->file('documentos');
            $this->servDoc->registrarMantenimiento($documentos,$id_mantenimiento);
        } 
	}

	public function eliminar($id)
	{
        $element = Mantenimiento::find($id);

        $element->estado=-1;

        $element->save();
	}

	
}