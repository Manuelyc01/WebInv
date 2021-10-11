<?php

namespace App\Services;

use App\Models\ColaboradorUbicacion;
use App\Services\ImagenService;
use App\Services\DocumentoService; 
use DB;
use App\Models\Mantenimiento;
use App\Models\SolOficinaEquipoTrab;

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
            ->join('tm_sede','tm_sede.id_sede','=','tm_ofi_trabajador.id_sede')
            ->join('tm_equipos','tm_equipos.id_equipo','=','tm_ofi_traba_equipo.id_equipo')
            ->leftjoin('tm_soli_ofi_equi_traba','tm_soli_ofi_equi_traba.id_soli_ofi_equi_tra','=','tm_mantenimiento.id_soli_ofi_equi_tra')
            ->select('tm_mantenimiento.*','tm_sede.*','tm_soli_ofi_equi_traba.*','tm_ofi_traba_equipo.*','tm_ofi_trabajador.*','tm_colaborador.*','tm_equipos.*')
            ->where('tm_mantenimiento.estado','>',-1)    
            ->orderBy('id_mantenimiento', 'DESC')->get();
		return $element;
	}
    public function listarBySedeAdmin($id_colaborador)
	{
        $listado = collect();
                $col=ColaboradorUbicacion::where('tm_colaborador_ubicacion.id_colaborador','=',$id_colaborador)
                        ->where('tm_colaborador_ubicacion.estado','=',1)->get();
                for($i = 0; $i < count($col); $i++){
                        $element = Mantenimiento::join('tm_ofi_traba_equipo','tm_ofi_traba_equipo.id_ofi_traba_equipo','=','tm_mantenimiento.id_ofi_traba_equipo')
                        ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_ofi_traba_equipo.id_ofi_trabajador')
                        ->join('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')
                        ->join('tm_sede','tm_sede.id_sede','=','tm_ofi_trabajador.id_sede')
                        ->join('tm_equipos','tm_equipos.id_equipo','=','tm_ofi_traba_equipo.id_equipo')
                        ->leftjoin('tm_soli_ofi_equi_traba','tm_soli_ofi_equi_traba.id_soli_ofi_equi_tra','=','tm_mantenimiento.id_soli_ofi_equi_tra')
                        ->select('tm_mantenimiento.*','tm_soli_ofi_equi_traba.*','tm_ofi_traba_equipo.*','tm_ofi_trabajador.*','tm_colaborador.*','tm_equipos.*','tm_sede.*')
                        ->where('tm_mantenimiento.estado','>',-1)    
                        ->where('tm_sede.id_sede','=',$col[$i]->id_sede)
                        ->orderBy('id_mantenimiento', 'DESC')->get();
                        
                        $listado=$listado->merge($element);
                }
                return $listado;
	}
    public function listarByEquiTrabaEqui($id)
	{
        $element = Mantenimiento::join('tm_ofi_traba_equipo','tm_ofi_traba_equipo.id_ofi_traba_equipo','=','tm_mantenimiento.id_ofi_traba_equipo')
            ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_ofi_traba_equipo.id_ofi_trabajador')
            ->join('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')
            ->join('tm_sede','tm_sede.id_sede','=','tm_ofi_trabajador.id_sede')
            ->join('tm_equipos','tm_equipos.id_equipo','=','tm_ofi_traba_equipo.id_equipo')
            ->leftjoin('tm_soli_ofi_equi_traba','tm_soli_ofi_equi_traba.id_soli_ofi_equi_tra','=','tm_mantenimiento.id_soli_ofi_equi_tra')
            ->select('tm_mantenimiento.*','tm_soli_ofi_equi_traba.*','tm_ofi_traba_equipo.*','tm_ofi_trabajador.*','tm_colaborador.*','tm_equipos.*','tm_sede.*')
            ->where('tm_mantenimiento.id_ofi_traba_equipo','=',$id)
            ->where('tm_mantenimiento.estado','>',-1)    
            ->orderBy('id_mantenimiento', 'DESC')->get();
		return $element;
	}
    public function listarBySolicitud($id)
	{
        $element = Mantenimiento::join('tm_ofi_traba_equipo','tm_ofi_traba_equipo.id_ofi_traba_equipo','=','tm_mantenimiento.id_ofi_traba_equipo')
            ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_ofi_traba_equipo.id_ofi_trabajador')
            ->join('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')
            ->join('tm_sede','tm_sede.id_sede','=','tm_ofi_trabajador.id_sede')
            ->join('tm_equipos','tm_equipos.id_equipo','=','tm_ofi_traba_equipo.id_equipo')
            ->leftjoin('tm_soli_ofi_equi_traba','tm_soli_ofi_equi_traba.id_soli_ofi_equi_tra','=','tm_mantenimiento.id_soli_ofi_equi_tra')
            ->select('tm_mantenimiento.*','tm_soli_ofi_equi_traba.*','tm_ofi_traba_equipo.*','tm_ofi_trabajador.*','tm_colaborador.*','tm_equipos.*','tm_sede.*')
            ->where('tm_mantenimiento.id_soli_ofi_equi_tra','=',$id)
            ->where('tm_mantenimiento.estado','>',-1)    
            ->orderBy('id_mantenimiento', 'DESC')->get();
		return $element;
	}

	public function registrar($request)
	{
        $element= new Mantenimiento();
        
        $element->descripcion=$request->get('descripcion');
        $element->estado=$request->get('estado');
        $element->id_ofi_traba_equipo=$request->get('id_ofi_traba_equipo');
        $element->id_soli_ofi_equi_tra=$request->get('soli');
        $element->save();
        
        if($request->hasfile('imagenes')){
            $imagenes = $request->file('imagenes');
            $this->servImg->registrarMantenimiento($imagenes,$element->id_mantenimiento);
         }
        if($request->hasfile('documentos')){
            $documentos=$request->file('documentos');
            $this->servDoc->registrarMantenimiento($documentos,$element->id_mantenimiento);
        } 
        if($request->get('soli')!=null){//Actualizar solicitud a En proceso
            $x1 = SolOficinaEquipoTrab::find($request->get('soli'));
            $x1->esta_soli_soli_ofi_equi_traba=1;
            $x1->save();
        }
    }
    
    public function editar($id_mantenimiento)
    {
        $e=Mantenimiento::join('tm_ofi_traba_equipo','tm_ofi_traba_equipo.id_ofi_traba_equipo','=','tm_mantenimiento.id_ofi_traba_equipo')
                ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_ofi_traba_equipo.id_ofi_trabajador')
                ->join('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')
                ->join('tm_sede','tm_sede.id_sede','=','tm_ofi_trabajador.id_sede')
                ->join('tm_equipos','tm_equipos.id_equipo','=','tm_ofi_traba_equipo.id_equipo')
                ->leftjoin('tm_soli_ofi_equi_traba','tm_soli_ofi_equi_traba.id_soli_ofi_equi_tra','=','tm_mantenimiento.id_soli_ofi_equi_tra')
                ->select('tm_mantenimiento.*','tm_soli_ofi_equi_traba.*','tm_ofi_traba_equipo.*','tm_ofi_trabajador.*','tm_colaborador.*','tm_equipos.*','tm_sede.*')
                ->where('tm_mantenimiento.id_mantenimiento','=',$id_mantenimiento)
                ->first();
        return $e;
    }

	public function actualizar($request, $id_mantenimiento)
	{
        
        $element = Mantenimiento::find($id_mantenimiento);

        $element->descripcion=$request->get('descripcion');
        $element->estado=$request->get('estado');
          
        $element->save();

        if($request->hasfile('imagenes')){
            $imagenes = $request->file('imagenes');
            $this->servImg->registrarMantenimiento($imagenes,$id_mantenimiento);
         }
        if($request->hasfile('documentos')){
            $documentos=$request->file('documentos');
            $this->servDoc->registrarMantenimiento($documentos,$id_mantenimiento);
        } 
        if($request->get('estado')==2 && $request->get('soli')!=null ){//finaliza el mantenimiento y es de solicitud
            $x1 = SolOficinaEquipoTrab::find($request->get('soli'));
            $x1->esta_soli_soli_ofi_equi_traba=0;
            $x1->save();
        }
        return $element;
	}

	public function eliminar($id)
	{
        $element = Mantenimiento::find($id);

        $element->estado=-1;

        $element->save();
        return $element;
	}

	
}