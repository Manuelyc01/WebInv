<?php

namespace App\Services;

use App\Models\Colaborador;
use App\Services\ImagenService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\BD;
use Illuminate\Support\Facades\DB;

class ColaboradorService
{
    public function listar()
	{
        //$element = Colaborador::orderBy('id_colaborador', 'ASC')->get();
		//return $element;

        $element = Colaborador::where('estado_usuario','=',1)->orderBy('id_colaborador', 'ASC')->get();
		return $element;
	}

	public function registrar($request)
	{   
        $element= new Colaborador();
        
        $query= DB::select('SELECT id_colaborador FROM tm_colaborador ORDER BY id_colaborador DESC LIMIT 1');
        
        //dd(($query[0]->id_colaborador)+1);

        $element->co_colaborador="USER".(($query[0]->id_colaborador)+1);
        $element->no_colaborador=$request->get('no_colaborador');
        $element->ap_paterno_colaborador=$request->get('ap_paterno_colaborador');
        $element->ap_materno_colaborador=$request->get('ap_materno_colaborador');
        $element->nu_documento=$request->get('nu_documento');
        $element->ti_documento=$request->get('ti_documento');
        $element->usuario=$request->get('usuario');
        //$element->password=$request->get('password');
        //$element->password=Crypt::encrypt($request->get('password')); 
        $element->password=Hash::make($request->get('password'));
        $element->email=$request->get('email');
        $element->tipo_usuario=$request->get('tipo_usuario');
        $element->estado_usuario= 1;
       
        if($request->hasfile('foto')){
            
            $foto = $request->file('foto');
            
            
            $ruta=public_path().'/uploads/fotos';
            
            $name = time().'_'.$foto->getClientOriginalName();
            //dd(200);
            $foto->move($ruta,$name);
            $element->foto='/uploads/fotos'.'/'.$name;
           
           
            
         }
         
         $element->save();
         
        
         
    
    }
    
    
    public function editar($id_colaborador)
    {
        $element = Colaborador::find($id_colaborador);
		return $element;
    }

    public function show($id_colaborador)
    {
        $element = Colaborador::find($id_colaborador);
        return $element;
    }

	public function actualizar($request, $id_colaborador)
	{
        $element = Colaborador::find($id_colaborador);

        $element->co_colaborador=$request->get('co_colaborador');
        $element->no_colaborador=$request->get('no_colaborador');
        $element->ap_paterno_colaborador=$request->get('ap_paterno_colaborador');
        $element->ap_materno_colaborador=$request->get('ap_materno_colaborador');
        $element->nu_documento=$request->get('nu_documento');
        $element->ti_documento=$request->get('ti_documento');
        $element->usuario=$request->get('usuario');
        if($request->password !=$element->password){
            $element->password=Hash::make($request->get('password'));
        }
        $element->email=$request->get('email');

        if($request->hasfile('foto')){
            
            $foto = $request->file('foto');
            
            
            $ruta=public_path().'/uploads/fotos';
            
            $name = time().'_'.$foto->getClientOriginalName();
            //dd(200);
            $foto->move($ruta,$name);
            $element->foto='/uploads/fotos'.'/'.$name;
           
           
            
         }
        

        $element->tipo_usuario=$request->get('tipo_usuario');
               
        $element->save();
        
	}

	public function eliminar($id)
	{
		//Colaborador::destroy($id);

        $element = Colaborador::find($id);
        $element->estado_usuario= 0;
        $element->save();
	}

	
}