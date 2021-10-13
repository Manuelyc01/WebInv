<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ColaboradorRequest;
use App\Http\Controllers\Controller;
use App\Services\ColaboradorService;
use Illuminate\Support\Facades\DB;

use App\Admin;
use App\Role;
use Illuminate\Support\Facades\Auth;

class ColaboradorController extends Controller
{
    private $service;

    public function __construct(ColaboradorService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        if(Auth::user()->tipo_usuario==1|| Auth::user()->tipo_usuario==3){
        $elements = $this->service->listar();
        return view('admin.colaborador-adm.index', compact('elements'));
        }else{
            return redirect()->route('panel');    
        }
    }
    public function colaboradorSedes($id_colaborador)
    {
        if(Auth::user()->tipo_usuario==1|| Auth::user()->tipo_usuario==3){
        $x = $this->service->editar($id_colaborador);
        $elements = $this->service->listarSedes($id_colaborador);
        $sedes=DB::select('SELECT * FROM tm_sede WHERE tm_sede.id_sede NOT IN (SELECT id_sede FROM tm_colaborador_ubicacion WHERE tm_colaborador_ubicacion.id_colaborador= '.$id_colaborador.' AND tm_colaborador_ubicacion.estado=1 )');
        return view('admin.colaborador-adm.sedes', compact('elements','x','sedes'));}else{
            return redirect()->route('panel');    
        }
    }
    public function addColaboradorSede($id_sede,$id_colaborador)
    {if(Auth::user()->tipo_usuario==1){
        $x = $this->service->addColaboradorSede($id_sede,$id_colaborador);
        if($x==1){
            $sedes=$this->service->listarSedes($id_colaborador);
            return response()->json($sedes);
        }else{
            return response()->json($x);
        }
    }else{
        return redirect()->route('panel');    
    }
    }
    public function sedesDataList($id_colaborador)
    {
        if(Auth::user()->tipo_usuario==1){
        $sedes=DB::select('SELECT * FROM tm_sede WHERE tm_sede.id_sede NOT IN (SELECT id_sede FROM tm_colaborador_ubicacion WHERE tm_colaborador_ubicacion.id_colaborador= '.$id_colaborador.' AND tm_colaborador_ubicacion.estado=1)');
        return response()->json($sedes);}else{
            return redirect()->route('panel');    
        }
    }
    public function dropSede($id_sede,$id_colaborador)
    {
        if(Auth::user()->tipo_usuario==1){
            $this->service->dropSede($id_sede,$id_colaborador);
            $sedes=$this->service->listarSedes($id_colaborador);
            return response()->json($sedes);
        }else{
            return redirect()->route('panel');    
        }
    }

    public function create()
    {
        if(Auth::user()->tipo_usuario==1){
        //return view('admin.colaborador-adm.edit');
        $query= DB::select('SELECT id_colaborador FROM tm_colaborador ORDER BY id_colaborador DESC LIMIT 1');
        //dd( "USER".(($query[0]->id_colaborador)+1)   );
        $Codigo="USER".(($query[0]->id_colaborador)+1);
        
        return view('admin.colaborador-adm.create')->with('codigo',$Codigo);}else{
            return redirect()->route('panel');    
        }
    }

    public function store(ColaboradorRequest $request)
    {
        $this->validate(request(), [
            
            'nu_documento' => 'required|numeric|unique:tm_colaborador',
            'usuario' => 'required|unique:tm_colaborador',
            'email' => 'required|email|unique:tm_colaborador',
            'password' => 'required|min:4'
        ]);

        if(Auth::user()->tipo_usuario==1){
        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('colaborador-adm.index');}else{
            return redirect()->route('panel');    
        }
    }

    public function show($id)
    {
        
    }

    public function edit($id_colaborador)
    {
        if(Auth::user()->tipo_usuario==1){
        $element = $this->service->editar($id_colaborador);
        return view('admin.colaborador-adm.edit', compact('element'));}else{
            return redirect()->route('panel');    
        }
    }

    public function update(ColaboradorRequest $request, $id_colaborador)
    {
            
        //dd($a);

        $this->validate(request(), [
            'co_colaborador' => 'required',
            'nu_documento' => 'required|numeric',
            'usuario' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);

        if(Auth::user()->tipo_usuario==1){
        $this->service->actualizar($request, $id_colaborador);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('colaborador-adm.index');}else{
            return redirect()->route('panel');    
        }
    }

    public function destroy($id)
    {
        if(Auth::user()->tipo_usuario==1){
        $this->service->eliminar($id);
        return redirect()->route('colaborador-adm.index');}else{
            return redirect()->route('panel');    
        }
    }
}