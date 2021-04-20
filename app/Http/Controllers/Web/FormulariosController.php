<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{ProdIndus, Info, ContactoSugerencia, TipoSugerencia, SedeDenuncia, TipoDenuncia, ContactoGlobal, ContactoSuscripcion, ContactoDenuncia};
use Carbon\Carbon;
use App\Mail\{FormContactoSugerenciaGracias, FormContactoSugerencia, FormContactoGlobalGracias,
              FormContactoGlobal, FormContactoSuscripcionGracias, FormContactoSuscripcion,
              FormContactoDenunciaGracias, FormContactoDenuncia};

class FormulariosController extends Controller
{
   	public function sugerencias()
    {
        $data['tipos'] = TipoSugerencia::all();
        return view("web.formularios.sugerencias", compact('data'));
    }

    public function denuncias()
    {
        $data['sedes'] = SedeDenuncia::all();
        $data['tipos'] = TipoDenuncia::all();
        return view("web.formularios.denuncias", compact('data'));
    } 
    
    public function contactanos()
    {
        $data['productosIndustrial'] = ProdIndus::all();
        if(session('solicitaProdIndustrial') != null){
            $data['idProdIndus'] = session('solicitaProdIndustrial');
            session(['solicitaProdIndustrial' => null]);
        }            
        else{
            $data['idProdIndus'] = '';
        }
        return view("web.formularios.contacto", compact('data'));
    } 

    public function gracias()
    {
        return view("web.formularios.gracias");
    } 

    public function graciasdenuncias()
    {
        $data['nombresDenuncia'] = session('nombresDenuncia');
        $data['identificadorDenuncia'] = session('identificadorDenuncia');
        return view("web.formularios.graciasdenuncias", compact('data'));
    } 


    public function guardarFormSugerencia(Request $request){
        try {
           
            $fecha = Carbon::now()->format('d-m-Y'); //obtiene la fecha actual de la máquina
            $info = Info::first();
            $check = 1;

            $tipo = TipoSugerencia::where('id', $request->tipo)->first();            
            
            //Registrar contacto
            $contacto = ContactoSugerencia::create([
                'tipo' => $tipo->nombre,
                'correo' => $request->correo,
                'nombres' => $request->nombres,
                'telefono' => $request->telefono,
                'documento' => $request->documento,
                'nacionalidad' => $request->nacionalidad,
                'mensaje' => $request->mensaje,
                'check' => $check,
                'formaContacto' => $request->forma,
                'fecha' => $fecha
            ]);            
            
            $contacto->save();            

            $correoCliente = array_map('trim', explode(',', $contacto->correo));
                \Mail::to($correoCliente)->send(new FormContactoSugerenciaGracias($contacto)); //envía correo al contacto (agradecimiento)

            $correoEnaco = array_map('trim', explode(',', $info->correoFormSugerencias));
                \Mail::to($correoEnaco)->send(new FormContactoSugerencia($contacto)); //envía correo a la empresa (nuevo lead)

            return response()->json([
                'status' => true,
                'message' => 'Success!',
            ]);

        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function guardarFormGlobal(Request $request){
        try {
           
            $fecha = Carbon::now()->format('d-m-Y'); //obtiene la fecha actual de la máquina
            $info = Info::first();
            $check = 1;
            
            //Registrar contacto
            $contacto = ContactoGlobal::create([
                'nombres' => $request->nombres,
                'apellidos' => $request->apellidos,
                'empresa' => $request->empresa,
                'producto' => $request->producto,
                'ruc' => $request->ruc,
                'telefono' => $request->telefono,
                'correo' => $request->correo,
                'mensaje' => $request->mensaje,
                'check' => $check,
                'fecha' => $fecha
            ]);            
            
            $contacto->save();            

            $correoCliente = array_map('trim', explode(',', $contacto->correo));
                \Mail::to($correoCliente)->send(new FormContactoGlobalGracias($contacto)); //envía correo al contacto (agradecimiento)

            $correoEnaco = array_map('trim', explode(',', $info->correoFormContactanos));
                \Mail::to($correoEnaco)->send(new FormContactoGlobal($contacto)); //envía correo a la empresa (nuevo lead)

            return response()->json([
                'status' => true,
                'message' => 'Success!',
            ]);

        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function guardarFormSuscripcion(Request $request){
        try {
           
            $fecha = Carbon::now()->format('d-m-Y'); //obtiene la fecha actual de la máquina
            $info = Info::first();
            $check = 1;
            
            //Registrar contacto
            $contacto = ContactoSuscripcion::create([
                'correo' => $request->correo,
                'fecha' => $fecha
            ]);            
            
            $contacto->save();            

            $correoCliente = array_map('trim', explode(',', $contacto->correo));
                \Mail::to($correoCliente)->send(new FormContactoSuscripcionGracias($contacto)); //envía correo al contacto (agradecimiento)

            $correoEnaco = array_map('trim', explode(',', $info->correoFormSuscribete));
                \Mail::to($correoEnaco)->send(new FormContactoSuscripcion($contacto)); //envía correo a la empresa (nuevo lead)

            return response()->json([
                'status' => true,
                'message' => 'Success!',
            ]);

        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function guardarFormDenuncia(Request $request){
        //dd($request->all());
        try {
           
            $fecha = Carbon::now()->format('d-m-Y'); //obtiene la fecha actual de la máquina
            $info = Info::first();
            $check = 1;

            //arrayInvolucrados
            $arrayInvolucrados = array();
            
            if($arrayInvolucrados != null){
                $involucrados = explode(';',$request->arrayInvolucrados);
                foreach($involucrados as $key => $value){
                    if($value != ''){
                        $partes = explode(',',$value);
                        array_push($arrayInvolucrados, array('nombres' => $partes[2], 'apellidos' => $partes[3], 'relacion' => $partes[4], 'cargo' => $partes[5], 'adicional' => $partes[6], 'tipo' => $partes[7]));
                    }
                }
            }else{
                $arrayInvolucrados = null;
            }          

            //Sede
            $sede = SedeDenuncia::where('id', $request->sede)->first();

            //Tipo
            $tipo = tipoDenuncia::where('id', $request->tipo)->first();

            //Archivo
            $dirArchivo = 'archivos_denuncias/';
            $validaArchivo = false;
            $contactosDenuncia = ContactoDenuncia::orderBy('id', 'DESC')->first();
            $fechaArchivo = Carbon::now()->format('Y');
            if($contactosDenuncia != null){
                if ($contactosDenuncia->id < 10) {
                    $id = 'D0'. ($contactosDenuncia->id + 1);
                } else {
                    $id = 'D'. ($contactosDenuncia->id + 1);
                }                
            }else{
                $id = 'D01';
            }
            //extension
            $extension = explode('.',$_FILES['archivo']['name']);
            $extensionArchivo = $extension[count($extension)-1];

            $rutaArchivo =  $dirArchivo.$fechaArchivo.'-'.$id.'-Fecha-'.$fecha.'.'.$extensionArchivo;
            
            if($_FILES['archivo']['tmp_name']){
                if( $_FILES['archivo']['type'] == "application/pdf" || 
                    $_FILES['archivo']['type'] == "application/msword" || 
                    $_FILES['archivo']['type'] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" || 
                    $_FILES['archivo']['type'] == "image/jpeg" || 
                    $_FILES['archivo']['type'] == "image/png"){
                    $nombreArchivo = $_FILES['archivo']['tmp_name'];
                    if(move_uploaded_file($nombreArchivo, $rutaArchivo)){
                        $validaArchivo = true;
                    }
                }
            }

            if($validaArchivo){
                $ruta = $rutaArchivo;
            }else{
                $ruta = '';
            }
            //dd($fechaArchivo.'-'.$id);
            //Registrar contacto
            $contacto = ContactoDenuncia::create([
                'identificador' => $fechaArchivo.'-'.$id,
                'sede' => $sede->nombre,
                'tipo' => $tipo->nombre,
                'identificarse' => $request->identificarse,
                'nombres' => $request->nombres,
                'dni' => $request->dni,
                'telefono' => $request->telefono,
                'correo' => $request->correo,
                'arrayInvolucrados' => $arrayInvolucrados,
                'sospecha' => $request->sospecha,
                'denunciaMensaje' => $request->denunciaMensaje,
                'checkTerminos' => $check,
                'archivo' => $ruta,
                'fecha' => $fecha
            ]);            
            
            $contacto->save();            

            $correoCliente = array_map('trim', explode(',', $contacto->correo));
                \Mail::to($correoCliente)->send(new FormContactoDenunciaGracias($contacto)); //envía correo al contacto (agradecimiento)

            $correoEnaco = array_map('trim', explode(',', $info->correoFormDenuncias));
                \Mail::to($correoEnaco)->send(new FormContactoDenuncia($contacto)); //envía correo a la empresa (nuevo lead)

            session(['nombresDenuncia' => $contacto->nombres]);
            session(['identificadorDenuncia' => $contacto->identificador]);

            return response()->json([
                'status' => true,
                'message' => 'Success!',
            ]);

        } catch (\Exception $e) {
            dd($e);
        }
    }



}