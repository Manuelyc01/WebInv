<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use App\Exports\SolOficinaEquipoTrabUserExport;

class ReportesExcelController extends Controller
{
    //
    public function ReporteSolicitudes(){
        
        \Excel::store(new SolOficinaEquipoTrabUserExport, 'ReporteSoliOficinaEquipoTrabajar.xlsx','export');
        return response()->json('ReporteSoliOficinaEquipoTrabajar.xlsx');
    }
}
