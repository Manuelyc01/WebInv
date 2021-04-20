<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ContactoSugerenciaRequest;
use App\Http\Controllers\Controller;
use App\Services\Admin\ContactoSugerenciaService;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use App\Models\{ContactoSugerencia};

class ContactoSugerenciaController extends Controller
{
    private $service;

    public function __construct(ContactoSugerenciaService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $elements = $this->service->listar();
        return view('admin.contacto-sugerencia-adm.index', compact('elements')); 
    }

    public function create()
    {
        //
    }

    public function store(ContactoSugerenciaRequest $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(ContactoSugerenciaRequest $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $this->service->eliminar($id);
        return redirect()->route('contacto-sugerencia-adm.index');
    }

    public function excelContacto()
    {
        $fecha = Carbon::now()->format('d-m-Y');
        $contacto = ContactoSugerencia::selectRaw('tipo as Tipo, correo as Correo, nombres as Nombres, telefono as Telefono, documento as NroDocumento, nacionalidad as Nacionalidad, formaContacto as FormaDeContacto, mensaje as Mensaje, fecha as FechaRegistro')->get();

        Excel::create('contactos-sugerencias-'.$fecha, function($excel) use ($contacto){
            $excel->sheet('contactos', function($sheet) use ($contacto){
                $sheet->fromArray($contacto);
            });
        })->download('xlsx');
    }
}