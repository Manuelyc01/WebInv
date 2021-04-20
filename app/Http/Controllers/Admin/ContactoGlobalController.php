<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ContactoGlobalRequest;
use App\Http\Controllers\Controller;
use App\Services\Admin\ContactoGlobalService;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use App\Models\{ContactoGlobal};

class ContactoGlobalController extends Controller
{
    private $service;

    public function __construct(ContactoGlobalService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $elements = $this->service->listar();
        return view('admin.contacto-global-adm.index', compact('elements')); 
    }

    public function create()
    {
        //
    }

    public function store(ContactoGlobalRequest $request)
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

    public function update(ContactoGlobalRequest $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $this->service->eliminar($id);
        return redirect()->route('contacto-global-adm.index');
    }

    public function excelContacto()
    {
        $fecha = Carbon::now()->format('d-m-Y');
        $contacto = ContactoGlobal::selectRaw('nombres as Nombres, apellidos as Apellidos, empresa as Empresa, ruc as RUC, telefono as Telefono, correo as Correo, producto as ProductoIndustrial, fecha as FechaRegistro, mensaje as Mensaje')->get();

        Excel::create('contactos-globales-'.$fecha, function($excel) use ($contacto){
            $excel->sheet('contactos', function($sheet) use ($contacto){
                $sheet->fromArray($contacto);
            });
        })->download('xlsx');
    }
}