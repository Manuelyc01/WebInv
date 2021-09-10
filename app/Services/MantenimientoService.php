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
        $element = Mantenimiento::orderBy('id_mantenimiento', 'ASC')->get();
		return $element;
	}
    public function listarByEquiTrabaEqui($id)
	{
        $element = Mantenimiento::
            where('id_ofi_traba_equipo','=',$id)
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
        $element = Mantenimiento::find($id_mantenimiento);
        return $element;
    }

	public function actualizar($request, $id_mantenimiento)
	{
        
        $element = Mantenimiento::find($id_mantenimiento);

        $element->descripcion=$request->get('descripcion');
        $element->estado=$request->get('estado');
        $element->id_ofi_traba_equipo=$request->get('id_ofi_traba_equipo');
        $element->id_soli_ofi_equi_tra=$request->get('id_soli_ofi_equi_tra');
          
        $element->save();
	}

	public function eliminar($id)
	{
        Mantenimiento::destroy($id);
	}

	
}