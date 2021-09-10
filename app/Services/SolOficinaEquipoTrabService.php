<?php

namespace App\Services;

use App\Models\SolOficinaEquipoTrab;
use App\Services\ImagenService;
use App\Services\DocumentoService; 
use Illuminate\Support\Facades\DB;

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
        $element = SolOficinaEquipoTrab::where('esta_solicitud','=',1)->orderBy('updated_at', 'DESC')->get();
		return $element;
	}
    
	public function registrar($request)
	{
        $element= new SolOficinaEquipoTrab();


        //$query= DB::select('SELECT id_solicitud FROM tm_solicitudes ORDER BY id_solicitud DESC LIMIT 1');
        

        
        //$id_solicitud=DB::table('tm_solicitudes')->where('cod_solicitud',$request->get('cod_solicitud'))->first()->id_solicitud;
        //$id_sede=DB::table('tm_sede')->where('co_sede',$request->get('co_sede'))->first()->id_sede;
        

        $element->descripcion_solicitud=$request->get('descripcion_solicitud');
        $element->esta_soli_soli_ofi_equi_traba=1;

        $element->id_solicitud=$request->get('id_solicitud');
        $element->id_ofi_traba_equipo=1;
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
        
        $element = SolOficinaEquipoTrab::find($id);
        return $element;
    }

	public function actualizar($request, $id)
	{
        
        //$element= new SolOficinaEquipoTrab();
        $element = SolOficinaEquipoTrab::find($id);

        $element->descripcion_solicitud=$request->get('descripcion_solicitud');
        $element->esta_soli_soli_ofi_equi_traba=$request->get('esta_soli_soli_ofi_equi_traba');
        $element->id_solicitud=$request->get('id_solicitud');
        $element->id_ofi_traba_equipo=$request->get('id_ofi_traba_equipo');
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

	
}