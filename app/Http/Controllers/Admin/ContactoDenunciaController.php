<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ContactoDenunciaRequest;
use App\Http\Controllers\Controller;
use App\Services\Admin\ContactoDenunciaService;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use App\Models\{ContactoDenuncia};

class ContactoDenunciaController extends Controller
{
    private $service;

    public function __construct(ContactoDenunciaService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $elements = $this->service->listar();
        return view('admin.contacto-denuncia-adm.index', compact('elements')); 
    }

    public function create()
    {
        //
    }

    public function store(ContactoDenunciaRequest $request)
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

    public function update(ContactoDenunciaRequest $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $this->service->eliminar($id);
        return redirect()->route('contacto-denuncia-adm.index');
    }

    public function excelContacto()
    {
        $fecha = Carbon::now()->format('d-m-Y');
        $contacto = ContactoDenuncia::selectRaw('identificador as ID, sede as Sede,
                    tipo as Tipo, identificarse as DeseaIdentificarse, nombres as Nombres,
                    dni as DNI, telefono as Telefono, correo as Correo, sospecha as SospechaJefeInmediato,
                    denunciaMensaje as MensajeDenuncia, fecha as FechaRegistro')->get();

        Excel::create('contactos-denuncia-'.$fecha, function($excel) use ($contacto){
            $excel->sheet('contactos', function($sheet) use ($contacto){
                $sheet->fromArray($contacto);
            });
        })->download('xlsx');
    }
}