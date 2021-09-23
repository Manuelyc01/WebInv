<?php

namespace App\Services;

use App\Models\Imagen;

class ImagenService
{
    public function getById($id){
        $imagen=Imagen::find($id);
        return $imagen;
    }
    public function listar()
	{
	}
    public function getByEquipo($id)
	{
        $imagenes=Imagen::where('id_equipo','=',$id)->where('esta_imagen','=',1)->orderBy('id', 'ASC')->get();
        return $imagenes;
    }
    public function getByOfiTrabaEqui($id)
	{
        $imagenes=Imagen::where('id_ofi_traba_equipo','=',$id)->where('esta_imagen','=',1)->orderBy('id', 'ASC')->get();
        return $imagenes;
    }
    public function getByComponente($id)
	{
        $docs=Imagen::where('id_componente','=',$id)->where('esta_imagen','=',1)->orderBy('id', 'ASC')->get();
        return $docs;
    }
    public function getByOfiTrabaEquiCompo($id)
	{
        $imagenes=Imagen::where('id_ofi_traba_equi_compo','=',$id)->where('esta_imagen','=',1)->orderBy('id', 'ASC')->get();
        return $imagenes;
    }

    public function getBySolOfiTrabaEqui($id)
	{
        $imagenes=Imagen::where('id_soli_ofi_equi_tra','=',$id)->where('esta_imagen','=',1)->orderBy('id', 'ASC')->get();
        return $imagenes;
    }
    public function getByMantenimiento($id)
	{
        $imagenes=Imagen::where('id_mantenimiento','=',$id)->where('esta_imagen','=',1)->orderBy('id', 'ASC')->get();

        return $imagenes;
    }

	public function registrar($imagenes,$id_equipo)
	{
        foreach($imagenes as $imagen){
            $name = time().'_'.$imagen->getClientOriginalName();
            $ruta=public_path().'/uploads/equipos';
            $imagen->move($ruta,$name);
            
            $element = new Imagen();
            $element->nombre=$imagen->getClientOriginalName();
            $element->url='/uploads/equipos'.'/'.$name;
            $element->id_equipo=$id_equipo;
            $element->esta_imagen=1;
            $element->save();
        }
    }
    public function registrarFotoSolicitud($imagenes,$id_soli_ofi_equi_tra)
	{
        foreach($imagenes as $imagen){
            $name = time().'_'.$imagen->getClientOriginalName();
            $ruta=public_path().'/uploads/solicitudesfotos';
            $imagen->move($ruta,$name);
            
            $element = new Imagen();
            $element->nombre=$imagen->getClientOriginalName();
            $element->url='/uploads/solicitudesfotos'.'/'.$name;
            $element->id_soli_ofi_equi_tra=$id_soli_ofi_equi_tra;
            $element->esta_imagen=1;
            $element->save();
        }
    }
    public function registrarOfiTraEqui($imagenes,$id_ofi_traba_equipo)
	{
        foreach($imagenes as $imagen){
            $name = time().'_'.$imagen->getClientOriginalName();
            $ruta=public_path().'/uploads/ofiTrabaEqui';
            $imagen->move($ruta,$name);
            
            $element = new Imagen();
            $element->nombre=$imagen->getClientOriginalName();
            $element->url='/uploads/ofiTrabaEqui'.'/'.$name;
            $element->id_ofi_traba_equipo=$id_ofi_traba_equipo;
            $element->esta_imagen=1;
            $element->save();
        }
    }
    public function registrarCompoEquiTrabajador($imagenes,$id_ofi_traba_equi_compo)
	{
        foreach($imagenes as $imagen){
            $name = time().'_'.$imagen->getClientOriginalName();
            $ruta=public_path().'/uploads/componenteEquipoTrabajajor';
            $imagen->move($ruta,$name);
            
            $element = new Imagen();
            $element->nombre=$imagen->getClientOriginalName();
            $element->url='/uploads/componenteEquipoTrabajajor'.'/'.$name;
            $element->id_ofi_traba_equi_compo=$id_ofi_traba_equi_compo;
            $element->esta_imagen=1;
            $element->save();
        }
    }
    public function registrarComponente($imagenes,$id_componente)
	{
        foreach($imagenes as $imagen){
            $name = time().'_'.$imagen->getClientOriginalName();
            $ruta=public_path().'/uploads/Componentes';
            $imagen->move($ruta,$name);
            
            $element = new Imagen();
            $element->nombre=$imagen->getClientOriginalName();
            $element->url='/uploads/Componentes'.'/'.$name;
            $element->id_componente=$id_componente;
            $element->esta_imagen=1;
            $element->save();
        }
    }
    public function registrarMantenimiento($imagenes,$id_mantenimiento)
	{
        foreach($imagenes as $imagen){
            $name = time().'_'.$imagen->getClientOriginalName();
            $ruta=public_path().'/uploads/Componentes';
            $imagen->move($ruta,$name);
            
            $element = new Imagen();
            $element->nombre=$imagen->getClientOriginalName();
            $element->url='/uploads/Componentes'.'/'.$name;
            $element->id_mantenimiento=$id_mantenimiento;
            $element->esta_imagen=1;
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
        $element=Imagen::find($id);
        $element->esta_imagen=0;
        $element->save();
	}
}