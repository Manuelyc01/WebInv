<?php

namespace App\Exports;

use App\Models\Mantenimiento;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;
class MantenimientoExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $mantenimiento=Mantenimiento::leftjoin('tm_ofi_traba_equipo','tm_ofi_traba_equipo.id_ofi_traba_equipo','=','tm_mantenimiento.id_ofi_traba_equipo')
            ->leftjoin('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_ofi_traba_equipo.id_ofi_trabajador')
            ->leftjoin('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')
            ->select('tm_mantenimiento.id_mantenimiento','tm_mantenimiento.descripcion','tm_mantenimiento.estado','tm_mantenimiento.id_soli_ofi_equi_tra','tm_colaborador.nu_documento','tm_colaborador.no_colaborador'
                    ,'tm_colaborador.ap_paterno_colaborador','tm_colaborador.ap_materno_colaborador')
            ->where('tm_mantenimiento.estado','!=',-1)
            ->get();
        foreach ($mantenimiento as $mantenimientos) {
            # code...
            if(isset($mantenimientos->id_soli_ofi_equi_tra)==true){
                $mantenimientos->id_soli_ofi_equi_tra="SOLICITUD";
            }
            else{
                $mantenimientos->id_soli_ofi_equi_tra="NORMAL";
            }

            switch ($mantenimientos->estado) {
                case 0:
                    $mantenimientos->estado="Iniciado";
                    break;
                case 1:
                    $mantenimientos->estado="En Proceso";
                    break;
                case 2:
                    $mantenimientos->estado="Finalizado";
                    break;
            }
        }
        return $mantenimiento;
    }
}
