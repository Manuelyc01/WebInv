<?php

namespace App\Services;

use App\Models\OfiTrabajadorEquipo;
use App\Models\SolOficinaEquipoTrabUser;
use App\Services\OfiTrabajadorEquipoService;
use App\Services\OficinaTrabajadorService;
use App\Services\ImagenService;
use App\Services\DocumentoService; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
class SolOficinaEquipoTrabUserService
{
    private $servImg;
    private $servDoc;
    private $servOficina;
    private $servTrabajador;

    public function __construct(ImagenService $servImg, DocumentoService $servDoc, OfiTrabajadorEquipoService $servOficina, OficinaTrabajadorService $servTrabajador)
    {
        $this->servImg = $servImg;
        $this->servDoc = $servDoc;
        $this->servOficina = $servOficina;
        $this->servTrabajador = $servTrabajador;
    }
    public function listar()
	{
        $element = SolOficinaEquipoTrabUser::where('esta_solicitud','=',1)->orderBy('updated_at', 'DESC')->get();
		return $element;
	}
    
	public function registrar($request)
	{
        $element= new SolOficinaEquipoTrabUser();
        
        
        $valor=$element->id_ofi_traba_equipo=$request->get('id_ofi_traba_equipo');
        $User=auth()->user()->id_colaborador;
        $validacion = $this->servOficina->validarOfiTrabajadorEquipo($User);
        
        $Trabajador=$this->servTrabajador->recuperarOfiTrabajador($User);//id_ofi_trabajador
        //dd($Trabajador);
        $element->descripcion_solicitud=$request->get('descripcion_solicitud');
        $element->esta_soli_soli_ofi_equi_traba=2;

        if($validacion==null)
        {
            $element->id_solicitud=16;
            $element->id_ofi_trabajador=$Trabajador->id_ofi_trabajador;
            $element->id_ofi_traba_equipo=$request->get('id_ofi_traba_equipo');
        }
        else
        {
            if($valor==null)
            {
                $element->id_solicitud=$request->get('id_solicitud');
                $element->id_ofi_trabajador=$Trabajador->id_ofi_trabajador;
                $element->id_ofi_traba_equipo=$request->get('id_ofi_traba_equipo');
            }
            else
            {
                $x=OfiTrabajadorEquipo::find($request->get('id_ofi_traba_equipo'));//Buscar ofiTraEqui
                $element->id_solicitud=$request->get('id_solicitud');
                $element->id_ofi_trabajador=$x->id_ofi_trabajador;
                $element->id_ofi_traba_equipo=$x->id_ofi_traba_equipo;
            }
        }
        
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

        $email=env('CORREO_ADMIN');
        
        $trabajador=DB::table('tm_ofi_trabajador')
                ->leftjoin('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')
                ->where('tm_ofi_trabajador.id_ofi_trabajador',$element['id_ofi_trabajador'])
                ->first();
        
        \Mail::send('correos.correo',['element'=>$element,'trabajador'=>$trabajador], function($message) use ($email) {
            $message->to($email)->subject
               ('Nueva Solicitud');
            $message->from('webmasterENACO@webmasterENACO.com');
             });
             
    }
    
    public function editar($id)
    {
        
        $element = SolOficinaEquipoTrabUser::find($id);
        return $element;
    }

	public function actualizar($request, $id)
	{
        
        //$element= new SolOficinaEquipoTrab();
        $element = SolOficinaEquipoTrabUser::find($id);

        $element->descripcion_solicitud=$request->get('descripcion_solicitud');
        //$element->esta_soli_soli_ofi_equi_traba=$request->get('esta_soli_soli_ofi_equi_traba');
        $element->id_solicitud=$request->get('id_solicitud');
        //$element->id_ofi_traba_equipo=$request->get('id_ofi_traba_equipo');
        $element->save();
        
        if($request->hasfile('documentos')){
            $documentos=$request->file('documentos');
            $this->servDoc->registrarDocSolicitud($documentos,$element->id_soli_ofi_equi_tra);
        }

        
        
	}

    public function show($id)
    {
        $element = SolOficinaEquipoTrabUser::find($id);
                
        return $element;
    }

    public function mostrar($id)
    {  
        $element = SolOficinaEquipoTrabUser::join('tm_solicitudes','tm_solicitudes.id_solicitud','=','tm_soli_ofi_equi_traba.id_solicitud')
                                        ->select('tm_soli_ofi_equi_traba.*','tm_solicitudes.*')
                                        ->where('tm_soli_ofi_equi_traba.id_soli_ofi_equi_tra',$id)
                                        ->first();

        return $element;
    }
    public function mostrarTrabajador($id)
    {  
        $element = SolOficinaEquipoTrabUser::join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_soli_ofi_equi_traba.id_ofi_trabajador')
                                        ->join('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador') 
                                        ->select('tm_soli_ofi_equi_traba.*','tm_colaborador.*')
                                        ->where('tm_soli_ofi_equi_traba.id_soli_ofi_equi_tra',$id)
                                        ->first();

        return $element;
    }
    public function mostrarEquipoTrajador($id)
    {  
        $element = SolOficinaEquipoTrabUser::join('tm_ofi_traba_equipo','tm_ofi_traba_equipo.id_ofi_traba_equipo','=','tm_soli_ofi_equi_traba.id_ofi_traba_equipo')
                                        ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_ofi_traba_equipo.id_ofi_trabajador')
                                        ->join('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')                      
                                        ->select('tm_soli_ofi_equi_traba.*','tm_ofi_traba_equipo.*','tm_ofi_trabajador.*','tm_colaborador.*')
                                        ->where('tm_soli_ofi_equi_traba.id_soli_ofi_equi_tra',$id)
                                        ->first();

        return $element;
    }

    public function mostrarEquipo($id)
    {  
        $element = SolOficinaEquipoTrabUser::join('tm_ofi_traba_equipo','tm_ofi_traba_equipo.id_ofi_traba_equipo','=','tm_soli_ofi_equi_traba.id_ofi_traba_equipo')
                                        ->join('tm_equipos','tm_equipos.id_equipo','=','tm_ofi_traba_equipo.id_equipo')
                                        ->select('tm_soli_ofi_equi_traba.*','tm_ofi_traba_equipo.*','tm_equipos.*')
                                        ->where('tm_soli_ofi_equi_traba.id_soli_ofi_equi_tra',$id)
                                        ->first();

        return $element;
    }

    public function recuperarUser($id)
    {  
        $element = SolOficinaEquipoTrabUser::join('tm_ofi_traba_equipo','tm_ofi_traba_equipo.id_ofi_traba_equipo','=','tm_soli_ofi_equi_traba.id_ofi_traba_equipo')
                                        ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_ofi_traba_equipo.id_ofi_trabajador')
                                        ->select('tm_soli_ofi_equi_traba.*','tm_ofi_traba_equipo.*','tm_ofi_trabajador.*')
                                        ->where('tm_ofi_trabajador.id_colaborador',$id)
                                        ->orderBy('tm_ofi_trabajador.id_colaborador', 'ASC')->get();

        return $element;
    }

    public function recuperarUserT($id)
    {  
        $element = SolOficinaEquipoTrabUser::join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_soli_ofi_equi_traba.id_ofi_trabajador')
                                        ->select('tm_soli_ofi_equi_traba.*','tm_ofi_trabajador.*')
                                        ->where('tm_ofi_trabajador.id_colaborador',$id)
                                        ->orderBy('tm_ofi_trabajador.id_colaborador', 'ASC')->get();

        return $element;
    }

    public function validarOfiTrabajadorEquipo($id)
    {  
         $element = SolOficinaEquipoTrabUser::join('tm_ofi_traba_equipo','tm_ofi_traba_equipo.id_ofi_traba_equipo','=','tm_soli_ofi_equi_traba.id_ofi_traba_equipo')
                                        ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_ofi_traba_equipo.id_ofi_trabajador')
                                        ->select('tm_soli_ofi_equi_traba.*','tm_ofi_traba_equipo.*','tm_ofi_trabajador.*')
                                        ->where('tm_ofi_trabajador.id_colaborador',$id)
                                        ->first();                                

        return $element;
    }

    public function recuperarOfiTrabajadorEquipo($id)
    {  
         $element = SolOficinaEquipoTrabUser::join('tm_ofi_traba_equipo','tm_ofi_traba_equipo.id_ofi_traba_equipo','=','tm_soli_ofi_equi_traba.id_ofi_traba_equipo')
                                        ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_ofi_traba_equipo.id_ofi_trabajador')
                                        ->select('tm_soli_ofi_equi_traba.*','tm_ofi_traba_equipo.*','tm_ofi_trabajador.*')
                                        ->where('tm_ofi_trabajador.id_colaborador',$id)
                                        ->orderBy('tm_ofi_trabajador.id_colaborador', 'ASC')->get();
                                                                      

        return $element;
    }

    
	public function eliminar($id)
	{
        $element = SolOficinaEquipoTrabUser::find($id);
        $element->esta_solicitud= 0;
        $element->save();
	}

	
}