<?php

namespace App\Services;

use App\Models\Documento;

class DocumentoService
{
    public function getById($id){
        $documento=Documento::find($id);
        return $documento;
    }
    public function listar()
	{
	}
    public function getByEquipo($id)
	{
        $docs=Documento::where('id_equipo','=',$id)->where('est_documento','=',1)->orderBy('id_documento', 'ASC')->get();
        return $docs;
    }
    public function getByOfiTrabaEqui($id)
	{
        $docs=Documento::where('id_ofi_traba_equipo','=',$id)->where('est_documento','=',1)->orderBy('id_documento', 'ASC')->get();
        return $docs;
    }
    public function getByComponente($id)
	{
        $docs=Documento::where('id_componente','=',$id)->where('est_documento','=',1)->orderBy('id_documento', 'ASC')->get();
        return $docs;
    }
    public function getByOfiTrabaEquiCompo($id)
	{
        $docs=Documento::where('id_ofi_traba_equi_compo','=',$id)->where('est_documento','=',1)->orderBy('id_documento', 'ASC')->get();
        return $docs;
    }
    public function getBySolOfiTrabaEqui($id)
	{
        $docs=Documento::where('id_soli_ofi_equi_tra','=',$id)->where('est_documento','=',1)->orderBy('id_documento', 'ASC')->get();
        return $docs;
    }
    public function getByMantenimiento($id)
	{
        $docs=Documento::where('id_mantenimiento','=',$id)->where('est_documento','=',1)->orderBy('id_documento', 'ASC')->get();
        return $docs;
    }

	public function registrar($docs,$id_equipo)
	{
        foreach($docs as $doc){
            $name = time().'_'.$doc->getClientOriginalName();
            $ruta=public_path().'/uploads/docsEquipos';
            $doc->move($ruta,$name);
            
            $element = new Documento();
            $element->nom_documento=$doc->getClientOriginalName();
            $element->url='/uploads/docsEquipos'.'/'.$name;
            $element->id_equipo=$id_equipo;
            $element->est_documento=1;
            $element->id_ofi_traba_equipo=null;
            $element->save();
        }
    }
    public function registrarDocSolicitud($docs,$id_equipo)
	{
        foreach($docs as $doc){
            $name = time().'_'.$doc->getClientOriginalName();
            $ruta=public_path().'/uploads/docsSolicitud';
            $doc->move($ruta,$name);
            
            $element = new Documento();
            $element->nom_documento=$doc->getClientOriginalName();
            $element->url='/uploads/docsSolicitud'.'/'.$name;
            $element->id_soli_ofi_equi_tra=$id_equipo;
            $element->est_documento=1;
            $element->id_ofi_traba_equipo=null;
            $element->save();
        }
    }
    public function registrarOfiTraEqui($docs,$id_ofi_traba_equipo)
	{
        foreach($docs as $doc){
            $name = time().'_'.$doc->getClientOriginalName();
            $ruta=public_path().'/uploads/docsOfiTrabaEqui';
            $doc->move($ruta,$name);
            
            $element = new Documento();
            $element->nom_documento=$doc->getClientOriginalName();
            $element->url='/uploads/docsOfiTrabaEqui'.'/'.$name;
            $element->id_equipo=null;
            $element->id_ofi_traba_equipo=$id_ofi_traba_equipo;
            $element->est_documento=1;
            $element->save();
        }
    }
    public function registrarCompoEquiTrabajador($docs,$id_ofi_traba_equi_compo)
	{
        foreach($docs as $doc){
            $name = time().'_'.$doc->getClientOriginalName();
            $ruta=public_path().'/uploads/docsComponenteEquipoTrabajador';
            $doc->move($ruta,$name);
            
            $element = new Documento();
            $element->nom_documento=$doc->getClientOriginalName();
            $element->url='/uploads/docsComponenteEquipoTrabajador'.'/'.$name;
            $element->id_equipo=null;
            $element->id_ofi_traba_equi_compo=$id_ofi_traba_equi_compo;
            $element->est_documento=1;
            $element->save();
        }
    }
    public function registrarComponente($docs,$id_componente)
	{
        foreach($docs as $doc){
            $name = time().'_'.$doc->getClientOriginalName();
            $ruta=public_path().'/uploads/Componentes';
            $doc->move($ruta,$name);
            
            $element = new Documento();
            $element->nom_documento=$doc->getClientOriginalName();
            $element->url='/uploads/Componentes'.'/'.$name;
            $element->id_componente=$id_componente;
            $element->est_documento=1;
            $element->save();
        }
    }
    public function registrarMantenimiento($docs,$id_mantenimiento)
	{
        foreach($docs as $doc){
            $name = time().'_'.$doc->getClientOriginalName();
            $ruta=public_path().'/uploads/Componentes';
            $doc->move($ruta,$name);
            
            $element = new Documento();
            $element->nom_documento=$doc->getClientOriginalName();
            $element->url='/uploads/Componentes'.'/'.$name;
            $element->id_mantenimiento=$id_mantenimiento;
            $element->est_documento=1;
            $element->save();
        }
    }
    
    public function editar($id_equipo)
    {
    }

	public function actualizar($request, $id_equipo)
	{
	}

	public function eliminar($id)
	{
        $element=Documento::find($id);
        $element->est_documento=0;
        $element->save();
	}

	
}