<?php

namespace App\Services;

use App\Models\ColaboradorUbicacion;
use App\Models\SolOficinaEquipoTrab;
use App\Services\ImagenService;
use App\Services\DocumentoService; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
class SolOficinaEquipoTrabService
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
        $element = SolOficinaEquipoTrab::join('tm_solicitudes','tm_solicitudes.id_solicitud','=','tm_soli_ofi_equi_traba.id_solicitud')
        ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_soli_ofi_equi_traba.id_ofi_trabajador')
        ->join('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')
        ->join('tm_sede','tm_sede.id_sede','=','tm_ofi_trabajador.id_sede')
        ->leftjoin('tm_ofi_traba_equipo','tm_ofi_traba_equipo.id_ofi_traba_equipo','=','tm_soli_ofi_equi_traba.id_ofi_traba_equipo')                        
        ->select('tm_soli_ofi_equi_traba.*','tm_sede.no_sede')
        ->where('tm_soli_ofi_equi_traba.esta_solicitud','=',1)    
        ->orderBy('tm_soli_ofi_equi_traba.updated_at', 'DESC')->get();
		return $element;
	}
    public function listarBySedeAdmin($id_colaborador)
	{
        $listado = collect();
                $col=ColaboradorUbicacion::where('tm_colaborador_ubicacion.id_colaborador','=',$id_colaborador)
                        ->where('tm_colaborador_ubicacion.estado','=',1)->get();
                for($i = 0; $i < count($col); $i++){
                        $element = SolOficinaEquipoTrab::join('tm_solicitudes','tm_solicitudes.id_solicitud','=','tm_soli_ofi_equi_traba.id_solicitud')
                        ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_soli_ofi_equi_traba.id_ofi_trabajador')
                        ->join('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')
                        ->join('tm_sede','tm_sede.id_sede','=','tm_ofi_trabajador.id_sede')
                        ->leftjoin('tm_ofi_traba_equipo','tm_ofi_traba_equipo.id_ofi_traba_equipo','=','tm_soli_ofi_equi_traba.id_ofi_traba_equipo')                        
                        ->select('tm_soli_ofi_equi_traba.*','tm_sede.no_sede')
                        ->where('tm_soli_ofi_equi_traba.esta_solicitud','=',1)    
                        ->where('tm_sede.id_sede','=',$col[$i]->id_sede)
                        ->orderBy('tm_soli_ofi_equi_traba.updated_at', 'DESC')->get();
                        $listado=$listado->merge($element);
                }
                return $listado;
	}
    public function recibidas()
	{
        $element = SolOficinaEquipoTrab::where('esta_solicitud','=',1)
            ->where('esta_soli_soli_ofi_equi_traba','=',2)                
            ->orderBy('updated_at', 'DESC')->get();
		return $element;
	}
    public function recibidasAdmin($id_colaborador)
	{
        $listado = collect();
                $col=ColaboradorUbicacion::where('tm_colaborador_ubicacion.id_colaborador','=',$id_colaborador)
                        ->where('tm_colaborador_ubicacion.estado','=',1)->get();
                for($i = 0; $i < count($col); $i++){
                        $element = SolOficinaEquipoTrab::join('tm_solicitudes','tm_solicitudes.id_solicitud','=','tm_soli_ofi_equi_traba.id_solicitud')
                        ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_soli_ofi_equi_traba.id_ofi_trabajador')
                        ->join('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')
                        ->join('tm_sede','tm_sede.id_sede','=','tm_ofi_trabajador.id_sede')
                        ->leftjoin('tm_ofi_traba_equipo','tm_ofi_traba_equipo.id_ofi_traba_equipo','=','tm_soli_ofi_equi_traba.id_ofi_traba_equipo')                        
                        ->select('tm_soli_ofi_equi_traba.*','tm_sede.no_sede')
                        ->where('tm_soli_ofi_equi_traba.esta_solicitud','=',1)
                        ->where('tm_soli_ofi_equi_traba.esta_soli_soli_ofi_equi_traba','=',2)                
                        ->where('tm_sede.id_sede','=',$col[$i]->id_sede)
                        ->orderBy('tm_soli_ofi_equi_traba.updated_at', 'DESC')->get();
                        
                        $listado=$listado->merge($element);
                }
                return $listado;
	}
    public function finalizados()
	{
        $element = SolOficinaEquipoTrab::where('esta_solicitud','=',1)
            ->where('esta_soli_soli_ofi_equi_traba','=',0)                
            ->orderBy('updated_at', 'DESC')->get();
		return $element;
	}
    public function finalizadosAdmin($id_colaborador)
	{
        $listado = collect();
                $col=ColaboradorUbicacion::where('tm_colaborador_ubicacion.id_colaborador','=',$id_colaborador)
                        ->where('tm_colaborador_ubicacion.estado','=',1)->get();
                for($i = 0; $i < count($col); $i++){
                        $element = SolOficinaEquipoTrab::join('tm_solicitudes','tm_solicitudes.id_solicitud','=','tm_soli_ofi_equi_traba.id_solicitud')
                        ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_soli_ofi_equi_traba.id_ofi_trabajador')
                        ->join('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')
                        ->join('tm_sede','tm_sede.id_sede','=','tm_ofi_trabajador.id_sede')
                        ->leftjoin('tm_ofi_traba_equipo','tm_ofi_traba_equipo.id_ofi_traba_equipo','=','tm_soli_ofi_equi_traba.id_ofi_traba_equipo')                        
                        ->select('tm_soli_ofi_equi_traba.*','tm_sede.no_sede')
                        ->where('tm_soli_ofi_equi_traba.esta_solicitud','=',1)
                        ->where('tm_soli_ofi_equi_traba.esta_soli_soli_ofi_equi_traba','=',0)                
                        ->where('tm_sede.id_sede','=',$col[$i]->id_sede)
                        ->orderBy('tm_soli_ofi_equi_traba.updated_at', 'DESC')->get();
                        
                        $listado=$listado->merge($element);
                }
                return $listado;
	}
    public function proceso()
	{
        $element = SolOficinaEquipoTrab::where('esta_solicitud','=',1)
            ->where('esta_soli_soli_ofi_equi_traba','=',1)                
            ->orderBy('updated_at', 'DESC')->get();
		return $element;
	}
    public function procesoAdmin($id_colaborador)
	{
        $listado = collect();
                $col=ColaboradorUbicacion::where('tm_colaborador_ubicacion.id_colaborador','=',$id_colaborador)
                        ->where('tm_colaborador_ubicacion.estado','=',1)->get();
                for($i = 0; $i < count($col); $i++){
                        $element = SolOficinaEquipoTrab::join('tm_solicitudes','tm_solicitudes.id_solicitud','=','tm_soli_ofi_equi_traba.id_solicitud')
                        ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_soli_ofi_equi_traba.id_ofi_trabajador')
                        ->join('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')
                        ->join('tm_sede','tm_sede.id_sede','=','tm_ofi_trabajador.id_sede')
                        ->leftjoin('tm_ofi_traba_equipo','tm_ofi_traba_equipo.id_ofi_traba_equipo','=','tm_soli_ofi_equi_traba.id_ofi_traba_equipo')                        
                        ->select('tm_soli_ofi_equi_traba.*','tm_sede.no_sede')
                        ->where('tm_soli_ofi_equi_traba.esta_solicitud','=',1)
                        ->where('tm_soli_ofi_equi_traba.esta_soli_soli_ofi_equi_traba','=',1)                
                        ->where('tm_sede.id_sede','=',$col[$i]->id_sede)
                        ->orderBy('tm_soli_ofi_equi_traba.updated_at', 'DESC')->get();
                        
                        $listado=$listado->merge($element);
                }
                return $listado;
	}
    
	public function registrar($request)
	{
        
        $element= new SolOficinaEquipoTrab();


        //$query= DB::select('SELECT id_solicitud FROM tm_solicitudes ORDER BY id_solicitud DESC LIMIT 1');
        

        
        //$id_solicitud=DB::table('tm_solicitudes')->where('cod_solicitud',$request->get('cod_solicitud'))->first()->id_solicitud;
        //$id_sede=DB::table('tm_sede')->where('co_sede',$request->get('co_sede'))->first()->id_sede;
        

        $element->descripcion_solicitud=$request->get('descripcion_solicitud');
        $element->esta_soli_soli_ofi_equi_traba=$request->get('esta_soli_soli_ofi_equi_traba');

        $element->id_solicitud=$request->get('id_solicitud');
        $element->id_ofi_traba_equipo=$request->get('id_ofi_traba_equipo');
        $element->esta_solicitud=1;
        $element->save();
        if($request->hasfile('imagenes')){
            //dd($element->id_solicitud);
            $imagenes = $request->file('imagenes');
            $this->servImg->registrarFotoSolicitud($imagenes,$element->id_soli_ofi_equi_tra);
        }
        //dd("pasa");
        if($request->hasfile('documentos')){
            $documentos=$request->file('documentos');
            $this->servDoc->registrarDocSolicitud($documentos,$element->id_soli_ofi_equi_tra);
        }    

        
    }
     
    public function editar($id)
    {
        $x1 = SolOficinaEquipoTrab::find($id);
        if($x1->id_ofi_traba_equipo==null){
            $element = SolOficinaEquipoTrab::join('tm_solicitudes','tm_solicitudes.id_solicitud','=','tm_soli_ofi_equi_traba.id_solicitud')
                    ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_soli_ofi_equi_traba.id_ofi_trabajador')    
                    ->join('tm_sede','tm_sede.id_sede','=','tm_ofi_trabajador.id_sede')                            
                    ->select('tm_soli_ofi_equi_traba.*','tm_solicitudes.*','tm_sede.id_sede')
                    ->where('tm_soli_ofi_equi_traba.id_soli_ofi_equi_tra',$id)
                    ->first();
            return $element;
        }else{
            $element = SolOficinaEquipoTrab::join('tm_solicitudes','tm_solicitudes.id_solicitud','=','tm_soli_ofi_equi_traba.id_solicitud')
                    ->join('tm_ofi_traba_equipo','tm_ofi_traba_equipo.id_ofi_traba_equipo','=','tm_soli_ofi_equi_traba.id_ofi_traba_equipo')    
                    ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_ofi_traba_equipo.id_ofi_trabajador')    
                    ->join('tm_sede','tm_sede.id_sede','=','tm_ofi_trabajador.id_sede')                            
                    ->select('tm_soli_ofi_equi_traba.*','tm_solicitudes.*','tm_sede.id_sede')
                    ->where('tm_soli_ofi_equi_traba.id_soli_ofi_equi_tra',$id)
                    ->first();
            return $element;
        }
        
    }

	public function actualizar($request, $id)
	{
        
        //$element= new SolOficinaEquipoTrab();
        $element = SolOficinaEquipoTrab::find($id);

        $element->descripcion_solicitud=$request->get('descripcion_solicitud');
        $element->esta_soli_soli_ofi_equi_traba=$request->get('esta_soli_soli_ofi_equi_traba');
        //$element->id_solicitud=$request->get('id_solicitud');
        $element->save();
        
        if($request->hasfile('documentos')){
            $documentos=$request->file('documentos');
            $this->servDoc->registrarDocSolicitud($documentos,$element->id_soli_ofi_equi_tra);
        }

        
        
	}

    public function show($id)
    {
        $element = SolOficinaEquipoTrab::find($id);
                
        return $element;
    }

    public function mostrar($id)
    {  
        $element = SolOficinaEquipoTrab::join('tm_solicitudes','tm_solicitudes.id_solicitud','=','tm_soli_ofi_equi_traba.id_solicitud')
                                        ->select('tm_soli_ofi_equi_traba.*','tm_solicitudes.*')
                                        ->where('tm_soli_ofi_equi_traba.id_soli_ofi_equi_tra',$id)
                                        ->first();

        return $element;
    }

	public function eliminar($id)
	{
        $element = SolOficinaEquipoTrab::find($id);
        $element->esta_solicitud= 0;
        $element->save();
	}

    public function mostrarTrabajador($id)
    {  
        $element = SolOficinaEquipoTrab::join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_soli_ofi_equi_traba.id_ofi_trabajador')
                                        ->join('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador') 
                                        ->select('tm_soli_ofi_equi_traba.*','tm_colaborador.*')
                                        ->where('tm_soli_ofi_equi_traba.id_soli_ofi_equi_tra',$id)
                                        ->first();

        return $element;
    }
    public function mostrarEquipoTrajador($id)
    {  
        $element = SolOficinaEquipoTrab::join('tm_ofi_traba_equipo','tm_ofi_traba_equipo.id_ofi_traba_equipo','=','tm_soli_ofi_equi_traba.id_ofi_traba_equipo')
                                        ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_ofi_traba_equipo.id_ofi_trabajador')
                                        ->join('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')                      
                                        ->select('tm_soli_ofi_equi_traba.*','tm_ofi_traba_equipo.*','tm_ofi_trabajador.*','tm_colaborador.*')
                                        ->where('tm_soli_ofi_equi_traba.id_soli_ofi_equi_tra',$id)
                                        ->first();

        return $element;
    }

    public function mostrarEquipo($id)
    {  
        $element = SolOficinaEquipoTrab::join('tm_ofi_traba_equipo','tm_ofi_traba_equipo.id_ofi_traba_equipo','=','tm_soli_ofi_equi_traba.id_ofi_traba_equipo')
                                        ->join('tm_equipos','tm_equipos.id_equipo','=','tm_ofi_traba_equipo.id_equipo')
                                        ->select('tm_soli_ofi_equi_traba.*','tm_ofi_traba_equipo.*','tm_equipos.*')
                                        ->where('tm_soli_ofi_equi_traba.id_soli_ofi_equi_tra',$id)
                                        ->first();

        return $element;
    }

	
}