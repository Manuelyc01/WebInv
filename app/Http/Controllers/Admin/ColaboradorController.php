<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ColaboradorRequest;
use App\Http\Controllers\Controller;
use App\Services\ColaboradorService;
use Illuminate\Support\Facades\DB;

use App\Admin;
use App\Role;

class ColaboradorController extends Controller
{
    private $service;

    public function __construct(ColaboradorService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $elements = $this->service->listar();
        return view('admin.colaborador-adm.index', compact('elements'));
    }

    public function create()
    {
        //return view('admin.colaborador-adm.edit');
        $query= DB::select('SELECT id_colaborador FROM tm_colaborador ORDER BY id_colaborador DESC LIMIT 1');
        //dd( "USER".(($query[0]->id_colaborador)+1)   );
        $Codigo="USER".(($query[0]->id_colaborador)+1);
        
        return view('admin.colaborador-adm.create')->with('codigo',$Codigo);
    }

    public function store(ColaboradorRequest $request)
    {
        $this->validate(request(), [
            
            'nu_documento' => 'required|numeric|unique:tm_colaborador',
            'usuario' => 'required|unique:tm_colaborador',
            'email' => 'required|email|unique:tm_colaborador',
            'password' => 'required|min:4'
        ]);

        $this->service->registrar($request);
        session()->flash('success', '¡Información registrada con éxito!');
        return redirect()->route('colaborador-adm.index');
    }

    public function show($id)
    {
        
    }

    public function edit($id_colaborador)
    {
        $element = $this->service->editar($id_colaborador);
        return view('admin.colaborador-adm.edit', compact('element'));
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

        $this->service->actualizar($request, $id_colaborador);
        session()->flash('success', '¡Información actualizada con éxito!');
        return redirect()->route('colaborador-adm.index');
    }

    public function destroy($id)
    {
        $this->service->eliminar($id);
        return redirect()->route('colaborador-adm.index');
    }
}