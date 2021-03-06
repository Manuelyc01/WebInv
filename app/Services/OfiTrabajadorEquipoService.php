<?php

namespace App\Services;

use App\Models\ColaboradorUbicacion;
use App\Models\OfiTrabajadorEquipo;
use App\Services\ImagenService;
use App\Services\DocumentoService; 
use DB;

class OfiTrabajadorEquipoService{
    private $servImg;
    private $servDoc;
    public function __construct(ImagenService $servImg, DocumentoService $servDoc)
    {
        $this->servImg = $servImg;
        $this->servDoc = $servDoc;
    }

    public function listar()
	{
        $element = OfiTrabajadorEquipo::join('tm_equipos','tm_equipos.id_equipo','=','tm_ofi_traba_equipo.id_equipo')
                    ->join('tm_categoria_equipos','tm_categoria_equipos.id_cat_equipos','=','tm_equipos.id_cat_equipos')
                    ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_ofi_traba_equipo.id_ofi_trabajador')
                    ->join('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')
                    ->join('tm_sede','tm_sede.id_sede','=','tm_ofi_trabajador.id_sede')
                    ->select('tm_ofi_traba_equipo.*','tm_equipos.*','tm_colaborador.*','tm_sede.*','tm_categoria_equipos.*')
                    ->where('tm_ofi_traba_equipo.esta_ofi_traba_equipo','>',-1)
                    ->orderBy('id_ofi_traba_equipo', 'DESC')->get();
		return $element;
	}
    public function listarBySedeAdmin($id_colaborador)
	{
        $listado = collect();
                $col=ColaboradorUbicacion::where('tm_colaborador_ubicacion.id_colaborador','=',$id_colaborador)
                        ->where('tm_colaborador_ubicacion.estado','=',1)->get();
                for($i = 0; $i < count($col); $i++){
                        $element = OfiTrabajadorEquipo::join('tm_equipos','tm_equipos.id_equipo','=','tm_ofi_traba_equipo.id_equipo')
                        ->join('tm_categoria_equipos','tm_categoria_equipos.id_cat_equipos','=','tm_equipos.id_cat_equipos')
                        ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_ofi_traba_equipo.id_ofi_trabajador')
                        ->join('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')
                        ->join('tm_sede','tm_sede.id_sede','=','tm_ofi_trabajador.id_sede')
                        ->select('tm_ofi_traba_equipo.*','tm_equipos.*','tm_colaborador.*','tm_sede.*','tm_categoria_equipos.*')
                        ->where('tm_ofi_traba_equipo.esta_ofi_traba_equipo','>',-1)
                        ->where('tm_sede.id_sede','=',$col[$i]->id_sede)
                        ->orderBy('id_ofi_traba_equipo', 'DESC')->get();
                        
                        $listado=$listado->merge($element);
                }
                return $listado;
	}
    public function listarByTrabajador($trabajador)
	{
        $element = OfiTrabajadorEquipo::join('tm_equipos','tm_equipos.id_equipo','=','tm_ofi_traba_equipo.id_equipo')
                    ->join('tm_categoria_equipos','tm_categoria_equipos.id_cat_equipos','=','tm_equipos.id_cat_equipos')
                    ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_ofi_traba_equipo.id_ofi_trabajador')
                    ->join('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')
                    ->join('tm_sede','tm_sede.id_sede','=','tm_ofi_trabajador.id_sede')
                    ->select('tm_ofi_traba_equipo.*','tm_equipos.*','tm_colaborador.*','tm_sede.*','tm_categoria_equipos.*')
                    ->where('tm_ofi_traba_equipo.esta_ofi_traba_equipo','>',-1)
                    ->where('tm_ofi_traba_equipo.id_ofi_trabajador','=',$trabajador)
                    ->orderBy('id_ofi_traba_equipo', 'DESC')->get();
		return $element;
	}
    public function listarAsignados()
	{
        $element = OfiTrabajadorEquipo::join('tm_equipos','tm_equipos.id_equipo','=','tm_ofi_traba_equipo.id_equipo')
                    ->join('tm_categoria_equipos','tm_categoria_equipos.id_cat_equipos','=','tm_equipos.id_cat_equipos')
                    ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_ofi_traba_equipo.id_ofi_trabajador')
                    ->join('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')
                    ->join('tm_sede','tm_sede.id_sede','=','tm_ofi_trabajador.id_sede')
                    ->select('tm_ofi_traba_equipo.*','tm_equipos.*','tm_colaborador.*','tm_sede.*','tm_categoria_equipos.*')
                    ->where('tm_ofi_traba_equipo.esta_ofi_traba_equipo','=',1)
                    ->orderBy('id_ofi_traba_equipo', 'DESC')->get();
		return $element;
	}
    public function listarAsignadosAdmin($id_colaborador)
	{
        $listado = collect();
        $col=ColaboradorUbicacion::where('tm_colaborador_ubicacion.id_colaborador','=',$id_colaborador)
                ->where('tm_colaborador_ubicacion.estado','=',1)->get();
        for($i = 0; $i < count($col); $i++){
                $element = OfiTrabajadorEquipo::join('tm_equipos','tm_equipos.id_equipo','=','tm_ofi_traba_equipo.id_equipo')
                ->join('tm_categoria_equipos','tm_categoria_equipos.id_cat_equipos','=','tm_equipos.id_cat_equipos')
                ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_ofi_traba_equipo.id_ofi_trabajador')
                ->join('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')
                ->join('tm_sede','tm_sede.id_sede','=','tm_ofi_trabajador.id_sede')
                ->select('tm_ofi_traba_equipo.*','tm_equipos.*','tm_colaborador.*','tm_sede.*','tm_categoria_equipos.*')
                ->where('tm_ofi_traba_equipo.esta_ofi_traba_equipo','=',1)
                ->where('tm_sede.id_sede','=',$col[$i]->id_sede)
                ->orderBy('id_ofi_traba_equipo', 'DESC')->get();

                $listado=$listado->merge($element);
        }
        return $listado;
	}
    public function listarNoAsignados()
	{
        $element = OfiTrabajadorEquipo::join('tm_equipos','tm_equipos.id_equipo','=','tm_ofi_traba_equipo.id_equipo')
                    ->join('tm_categoria_equipos','tm_categoria_equipos.id_cat_equipos','=','tm_equipos.id_cat_equipos')
                    ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_ofi_traba_equipo.id_ofi_trabajador')
                    ->join('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')
                    ->join('tm_sede','tm_sede.id_sede','=','tm_ofi_trabajador.id_sede')
                    ->select('tm_ofi_traba_equipo.*','tm_equipos.*','tm_colaborador.*','tm_sede.*','tm_categoria_equipos.*')
                    ->where('tm_ofi_traba_equipo.esta_ofi_traba_equipo','=',0)
                    ->orderBy('id_ofi_traba_equipo', 'DESC')->get();
		return $element;
	}
    public function listarNoAsignadosAdmin($id_colaborador)
	{
        $listado = collect();
        $col=ColaboradorUbicacion::where('tm_colaborador_ubicacion.id_colaborador','=',$id_colaborador)
                ->where('tm_colaborador_ubicacion.estado','=',1)->get();
        for($i = 0; $i < count($col); $i++){
                $element = OfiTrabajadorEquipo::join('tm_equipos','tm_equipos.id_equipo','=','tm_ofi_traba_equipo.id_equipo')
                ->join('tm_categoria_equipos','tm_categoria_equipos.id_cat_equipos','=','tm_equipos.id_cat_equipos')
                ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_ofi_traba_equipo.id_ofi_trabajador')
                ->join('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')
                ->join('tm_sede','tm_sede.id_sede','=','tm_ofi_trabajador.id_sede')
                ->select('tm_ofi_traba_equipo.*','tm_equipos.*','tm_colaborador.*','tm_sede.*','tm_categoria_equipos.*')
                ->where('tm_ofi_traba_equipo.esta_ofi_traba_equipo','=',0)
                ->where('tm_sede.id_sede','=',$col[$i]->id_sede)
                ->orderBy('id_ofi_traba_equipo', 'DESC')->get();

                $listado=$listado->merge($element);
        }
        return $listado;
	}
    public function listarMantenimiento()
	{
        $element = OfiTrabajadorEquipo::leftJoin('tm_mantenimiento','tm_mantenimiento.id_ofi_traba_equipo','=','tm_ofi_traba_equipo.id_ofi_traba_equipo')
                    ->join('tm_equipos','tm_equipos.id_equipo','=','tm_ofi_traba_equipo.id_equipo')
                    ->join('tm_categoria_equipos','tm_categoria_equipos.id_cat_equipos','=','tm_equipos.id_cat_equipos')
                    ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_ofi_traba_equipo.id_ofi_trabajador')
                    ->join('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')
                    ->join('tm_sede','tm_sede.id_sede','=','tm_ofi_trabajador.id_sede')
                    ->select('tm_ofi_traba_equipo.*','tm_equipos.*','tm_colaborador.*','tm_sede.*','tm_categoria_equipos.*')
                    ->whereIn('tm_mantenimiento.estado',[0, 1])
                    ->orderBy('id_ofi_traba_equipo', 'DESC')
                    ->get();
		return $element->unique() ;
	}
    public function listarMantenimientoAdmin($id_colaborador)
	{
        $listado = collect();
        $col=ColaboradorUbicacion::where('tm_colaborador_ubicacion.id_colaborador','=',$id_colaborador)
                ->where('tm_colaborador_ubicacion.estado','=',1)->get();
        for($i = 0; $i < count($col); $i++){
                $element = OfiTrabajadorEquipo::leftJoin('tm_mantenimiento','tm_mantenimiento.id_ofi_traba_equipo','=','tm_ofi_traba_equipo.id_ofi_traba_equipo')
                ->join('tm_equipos','tm_equipos.id_equipo','=','tm_ofi_traba_equipo.id_equipo')
                ->join('tm_categoria_equipos','tm_categoria_equipos.id_cat_equipos','=','tm_equipos.id_cat_equipos')
                ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_ofi_traba_equipo.id_ofi_trabajador')
                ->join('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')
                ->join('tm_sede','tm_sede.id_sede','=','tm_ofi_trabajador.id_sede')
                ->select('tm_ofi_traba_equipo.*','tm_equipos.*','tm_colaborador.*','tm_sede.*','tm_categoria_equipos.*')
                ->where('tm_ofi_trabajador.id_sede','=',$col[$i]->id_sede)
                ->whereIn('tm_mantenimiento.estado',[0, 1])
                ->orderBy('id_ofi_traba_equipo', 'DESC')
                ->get();
                $listado=$listado->merge($element);
        }
        return $listado->unique();
	}

	public function registrar($request)
	{   
        $stp=DB::select('CALL registrar_ofiTrabajadorEquipo(?,?,?,?,?,?)',
                array($request->no_equipo,$request->sis_operativo,$request->estado_equipo,$request->esta_ofi_traba_equipo,$request->id_equipo,$request->id_ofi_trabajador));
        if(isset($stp[0]->FALSE)){
            return $stp;
        }else{
            //guardar imagen o documentos si existen
            if($request->hasfile('imagenes')){
                $imagenes = $request->file('imagenes');
                $this->servImg->registrarOfiTraEqui($imagenes,$stp[0]->id);
             }
            if($request->hasfile('documentos')){
                $documentos=$request->file('documentos');
                $this->servDoc->registrarOfiTraEqui($documentos,$stp[0]->id);
            }
            return $stp;
        }
        
    }
    public function transferirEquipo($element,$request,$id){
        $stp=DB::select('CALL transferir_ofiTrabajadorEquipo(?,?,?,?,?,?,?)',
                array($element->no_equipo,$element->sis_operativo,$request->estado_equipo,$element->esta_ofi_traba_equipo,$element->id_equipo,$request->id_ofi_trabajador,$id));
        if(isset($stp[0]->FALSE)){
            return $stp;
        }else{
            //transferir documentos
            DB::select('CALL transferir_componentes(?,?)',
                    array($stp[0]->id,$id));
            //guardar imagen o documentos si existen
            if($request->hasfile('imagenes')){
                $imagenes = $request->file('imagenes');
                $this->servImg->registrarOfiTraEqui($imagenes,$stp[0]->id);
             }
            if($request->hasfile('documentos')){
                $documentos=$request->file('documentos');
                $this->servDoc->registrarOfiTraEqui($documentos,$stp[0]->id);
            }
            return $stp;
        }
    }
    
    
    public function editar($id)
    {
        $element = OfiTrabajadorEquipo::join('tm_equipos','tm_equipos.id_equipo','=','tm_ofi_traba_equipo.id_equipo')
                ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_ofi_traba_equipo.id_ofi_trabajador')
                ->join('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')
                ->join('tm_sede','tm_sede.id_sede','=','tm_ofi_trabajador.id_sede')
                ->join('tm_oficina','tm_oficina.id_oficina','=','tm_ofi_trabajador.id_oficina')
                ->select('tm_ofi_traba_equipo.*','tm_equipos.*','tm_colaborador.*','tm_sede.*','tm_oficina.no_oficina')
                ->where('tm_ofi_traba_equipo.id_ofi_traba_equipo',$id)
                ->first();
        return $element;
    }

    public function show($id)
    {
        $element = OfiTrabajadorEquipo::join('tm_equipos','tm_equipos.id_equipo','=','tm_ofi_traba_equipo.id_equipo')
                ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_ofi_traba_equipo.id_ofi_trabajador')
                ->join('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')
                ->join('tm_sede','tm_sede.id_sede','=','tm_ofi_trabajador.id_sede')
                ->join('tm_oficina','tm_oficina.id_oficina','=','tm_ofi_trabajador.id_oficina')
                ->select('tm_ofi_traba_equipo.*','tm_equipos.*','tm_colaborador.*','tm_sede.*','tm_oficina.no_oficina')
                ->where('tm_ofi_traba_equipo.id_ofi_traba_equipo',$id)
                ->first();
        return $element;
    }

	public function actualizar($request, $id)
	{
        $element= OfiTrabajadorEquipo::find($id);

        if($element->esta_ofi_traba_equipo==0 || $element->esta_ofi_traba_equipo==-1){
            if($request->hasfile('imagenes')){
                $imagenes = $request->file('imagenes');
                $this->servImg->registrarOfiTraEqui($imagenes,$id);
             }
            if($request->hasfile('documentos')){
                $documentos=$request->file('documentos');
                $this->servDoc->registrarOfiTraEqui($documentos,$id);
            }
        }else{
            $element->no_equipo=$request->get('no_equipo');
            $element->sis_operativo=$request->get('sis_operativo');
            $element->estado_equipo=$request->get('estado_equipo');
            $element->esta_ofi_traba_equipo=$request->get('esta_ofi_traba_equipo');
            //guardar imagen o documentos si existen
            if($request->hasfile('imagenes')){
                $imagenes = $request->file('imagenes');
                $this->servImg->registrarOfiTraEqui($imagenes,$id);
             }
            if($request->hasfile('documentos')){
                $documentos=$request->file('documentos');
                $this->servDoc->registrarOfiTraEqui($documentos,$id);
            }
            $element->save();
        }
	}
    public function recuperar()//recupera datos del para la tabla solOficinaEquipotrab
	{
        $element = OfiTrabajadorEquipo::join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_ofi_traba_equipo.id_ofi_trabajador')
                    ->join('tm_cargo_laboral','tm_cargo_laboral.id_cargo_laboral','=','tm_ofi_trabajador.id_cargo_laboral')
                    ->join('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')
                   // ->select('tm_ofi_traba_equipo.*','tm_ofi_trabajador.*','tm_cargo_laboral.*','tm_colaborador.*')
                    ->select('tm_ofi_traba_equipo.*','tm_ofi_trabajador.*','tm_cargo_laboral.no_cargo_laboral','tm_colaborador.ap_paterno_colaborador','tm_colaborador.ap_materno_colaborador','tm_colaborador.no_colaborador','tm_colaborador.co_colaborador')
                    ->orderBy('id_ofi_traba_equipo', 'DESC')->get();
		return $element;
	}

	public function eliminar($id)
	{
        $element=OfiTrabajadorEquipo::find($id);
        $element->esta_ofi_traba_equipo=-1;
        $element->save();
	}

    public function verificarEquipo($id)
	{
        $element = OfiTrabajadorEquipo::where('esta_ofi_traba_equipo', '=',1)
            ->where('id_equipo','=',$id)
            ->get();
        return $element;
	}

    public function validarOfiTrabajadorEquipo($id)
    {  
         $element = OfiTrabajadorEquipo::join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_ofi_traba_equipo.id_ofi_trabajador')
                                        ->join('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')
                                        ->join('tm_equipos','tm_equipos.id_equipo','=','tm_ofi_traba_equipo.id_equipo')
                                        ->select('tm_ofi_traba_equipo.*','tm_ofi_trabajador.*','tm_colaborador.*','tm_equipos.*')
                                        ->where('tm_ofi_traba_equipo.esta_ofi_traba_equipo','=',1)
                                        ->where('tm_ofi_trabajador.id_colaborador',$id)
                                        ->first();                              

        return $element;
    }

    public function recuperarOfiTrabajadorEquipo($id)
    {  
         $element = OfiTrabajadorEquipo::join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_ofi_traba_equipo.id_ofi_trabajador')
                                        ->join('tm_sede','tm_sede.id_sede','=','tm_ofi_trabajador.id_sede')
                                        ->join('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')
                                        ->join('tm_equipos','tm_equipos.id_equipo','=','tm_ofi_traba_equipo.id_equipo')
                                        ->select('tm_sede.*','tm_ofi_traba_equipo.*','tm_ofi_trabajador.*','tm_colaborador.*','tm_equipos.*')
                                        ->where('tm_ofi_traba_equipo.esta_ofi_traba_equipo','=',1)
                                        ->where('tm_ofi_trabajador.id_colaborador',$id)
                                        ->orderBy('tm_ofi_trabajador.id_colaborador', 'ASC')->get();
                                                                      

        return $element;
    }


}
?>