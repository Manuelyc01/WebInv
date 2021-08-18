<?php

namespace App\Services;
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
        $element = OfiTrabajadorEquipo::orderBy('updated_at', 'DESC')->get();
		return $element;
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
                $this->servImg->registrarOfiTraEqui($imagenes,$request->id_ofi_trabajador);
             }
            if($request->hasfile('documentos')){
                $documentos=$request->file('documentos');
                $this->servDoc->registrarOfiTraEqui($documentos,$request->id_ofi_trabajador);
            }
            return $stp;
        }
        
    }
    
    
    public function editar($id)
    {
        $element = OfiTrabajadorEquipo::join('tm_equipo','tm_equipo.id_equipo','=','tm_ofi_traba_equipo.id_equipo')
                ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_ofi_traba_equipo.id_ofi_trabajador')
                ->select('tm_ofi_traba_equipo.*','tm_equipo.*','tm_ofi_trabajador.*')
                ->where('tm_ofi_traba_equipo.id_ofi_trabajador',$$id)
                ->first();
        return $element;
    }

    public function show($id)
    {
        $element = OfiTrabajadorEquipo::join('tm_equipo','tm_equipo.id_equipo','=','tm_ofi_traba_equipo.id_equipo')
                ->join('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_ofi_traba_equipo.id_ofi_trabajador')
                ->select('tm_ofi_traba_equipo.*','tm_equipo.*','tm_ofi_trabajador.*')
                ->where('tm_ofi_traba_equipo.id_ofi_trabajador',$$id)
                ->first();
        return $element;
    }

	public function actualizar($request, $id_colaborador)
	{
        $element= new OfiTrabajadorEquipo();

        $element->no_equipo=$request->get('no_equipo');
        $element->sis_operativo=$request->get('sis_operativo');
        $element->estado_equipo=$request->get('estado_equipo');
        $element->esta_ofi_traba_equipo=$request->get('esta_ofi_traba_equipo');
        $element->id_equipo=$request->get('id_equipo');
        $element->id_ofi_trabajador=$request->get('id_ofi_trabajador');
         
         $element->save();
	}

	public function eliminar($id)
	{
	}

    public function verificarEquipo($id)
	{
        $element = OfiTrabajadorEquipo::where('esta_ofi_traba_equipo', '>=',1)
            ->where('id_equipo','=',$id)
            ->get();
        return $element;
	}


}
?>