<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ContactoSuscripcionRequest;
use App\Http\Controllers\Controller;
use App\Services\Admin\ContactoSuscripcionService;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use App\Models\{ContactoSuscripcion};

class ContactoSuscripcionController extends Controller
{
    private $service;

    public function __construct(ContactoSuscripcionService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $elements = $this->service->listar();
        return view('admin.contacto-suscripcion-adm.index', compact('elements')); 
    }

    public function create()
    {
        //
    }

    public function store(ContactoSuscripcionRequest $request)
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

    public function update(ContactoSuscripcionRequest $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $this->service->eliminar($id);
        return redirect()->route('contacto-suscripcion-adm.index');
    }

    public function excelContacto()
    {
        $fecha = Carbon::now()->format('d-m-Y');
        $contacto = ContactoSuscripcion::selectRaw('correo as Correo, DATE_FORMAT(fecha, "%d/%m/%Y") as FechaRegistro')->get();

        Excel::create('contactos-suscripcion-'.$fecha, function($excel) use ($contacto){
            $excel->sheet('contactos', function($sheet) use ($contacto){
                $sheet->fromArray($contacto);
            });
        })->download('xlsx');
    }
}