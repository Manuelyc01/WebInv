<?php

namespace App\Services;
use App\Models\Componente;
use App\Models\ComponenteTrabajadorEquipo;
use App\Services\ImagenService;
use App\Services\DocumentoService;
use App\Services\ComponenteService;  
use DB;

class ComponenteTrabajadorEquipoService{
    private $servImg;
    private $servDoc;
    public function __construct(ImagenService $servImg, DocumentoService $servDoc,ComponenteService $componService)
    {
        $this->servImg = $servImg;
        $this->servDoc = $servDoc;
        $this->componService = $componService;
    }

    public function listar($id_ofi_equi_trabajador)
	{
        $element = ComponenteTrabajadorEquipo::join('tm_componentes','tm_componentes.id_componente','=','tm_ofi_traba_equi_compo.id_componente')
                    ->select('tm_ofi_traba_equi_compo.*','tm_componentes.serie_componente','tm_componentes.des_componente')
                    ->where('tm_ofi_traba_equi_compo.id_ofi_traba_equipo',$id_ofi_equi_trabajador)
                    ->where('tm_ofi_traba_equi_compo.esta_ofi_traba_equi_compo','!=',-1)
                    ->get();
		return $element;
	}

	public function registrar($request)
	{   
        
        $element= new ComponenteTrabajadorEquipo();
        $element->esta_ofi_traba_equi_compo=1;
        $element->id_ofi_traba_equipo=$request->get('id_ofi_traba_equipo');
        $element->id_componente=$request->get('id_componente');
        $element->created_at=date("Y-m-d H:i:s");
        $element->updated_at=date("Y-m-d H:i:s");
        $element->save();

        DB::table('tm_componentes')->where('id_componente',$request->get('id_componente'))->update(['esta_componente'=>2]);

        if($request->hasfile('imagenes')){
            $imagenes = $request->file('imagenes');
            $this->servImg->registrarCompoEquiTrabajador($imagenes,$element->id_ofi_traba_equi_compo);
        }
        if($request->hasfile('documentos')){
            $documentos=$request->file('documentos');
            $this->servDoc->registrarCompoEquiTrabajador($documentos,$element->id_ofi_traba_equi_compo);
        }
    }
    
    
    public function editar($id)
    {
        $element = ComponenteTrabajadorEquipo::where('id_ofi_traba_equi_compo',$id)->first();
        return $element;
    }


	public function actualizar($request, $id)
	{
        $element= ComponenteTrabajadorEquipo::find($id);
        $element->esta_ofi_traba_equi_compo=$request->get('esta_ofi_traba_equi_compo');
        $element->id_componente=$request->get('id_componente');
        $element->updated_at=date("Y-m-d H:i:s");
        
        if($request->hasfile('imagenes')){
            $imagenes = $request->file('imagenes');
            $this->servImg->registrarCompoEquiTrabajador($imagenes,$element->id_ofi_traba_equi_compo);
        }
        if($request->hasfile('documentos')){
            $documentos=$request->file('documentos');
            $this->servDoc->registrarCompoEquiTrabajador($documentos,$element->id_ofi_traba_equi_compo);
        }
        $element->save();
        ///////
        DB::table('tm_componentes')->where('id_componente',$request->get('id_componente'))->update(['esta_componente'=>2]);

	}

	public function eliminar($id)
	{
        $element = ComponenteTrabajadorEquipo::find($id);
        $element->esta_ofi_traba_equi_compo= -1;
        $element->save();

	}

    public function verificarEquipo($id)
	{
        $element = OfiTrabajadorEquipo::where('esta_ofi_traba_equipo', '=',1)
            ->where('id_equipo','=',$id)
            ->get();
        return $element;
	}


}
?>