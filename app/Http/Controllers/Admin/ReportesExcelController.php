<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use App\Exports\SolOficinaEquipoTrabUserExport;
use App\Exports\MantenimientoExport;
use App\Exports\OficinaTrabajadorEquipoExport;
class ReportesExcelController extends Controller
{
    //
    public function ReporteSolicitudes(){
        
        \Excel::store(new SolOficinaEquipoTrabUserExport, 'ReporteSoliOficinaEquipoTrabajar.xlsx','export');
        return response()->json('ReporteSoliOficinaEquipoTrabajar.xlsx');
    }
    public function ReporteMantenimiento(){
        \Excel::store(new MantenimientoExport, 'ReporteMantenimientoEquipos.xlsx','export');
        return response()->json('ReporteMantenimientoEquipos.xlsx');
    }
    public function ReporteOficinaTrabajadorEquipo(){
        \Excel::store(new OficinaTrabajadorEquipoExport, 'ReporteOficinaTrabajadorEquipo.xlsx','export');
        return response()->json('ReporteOficinaTrabajadorEquipo.xlsx');
    }
    
}
