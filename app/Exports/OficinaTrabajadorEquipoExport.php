<?php

namespace App\Exports;

use App\Models\OfiTrabajadorEquipo;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;
class OficinaTrabajadorEquipoExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $ofi_traba_equipo=OfiTrabajadorEquipo::leftjoin('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_ofi_traba_equipo.id_ofi_trabajador')
            ->leftjoin('tm_equipos','tm_equipos.id_equipo','=','tm_ofi_traba_equipo.id_equipo')
            ->leftjoin('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')
            ->select('tm_colaborador.nu_documento','tm_colaborador.no_colaborador','tm_colaborador.ap_paterno_colaborador','tm_colaborador.ap_materno_colaborador',
            'tm_ofi_traba_equipo.no_equipo','tm_ofi_traba_equipo.sis_operativo','tm_ofi_traba_equipo.esta_ofi_traba_equipo','tm_ofi_traba_equipo.created_at')
            ->where('tm_ofi_traba_equipo.esta_ofi_traba_equipo','!=',-1)
            ->get();
        foreach ($ofi_traba_equipo as $ofi_traba_equipos) {
            # code...
            switch ($ofi_traba_equipos->esta_ofi_traba_equipo) {
                case 0:
                    $ofi_traba_equipos->esta_ofi_traba_equipo="SIN ASIGNAR";
                    break;
                case 1:
                    $ofi_traba_equipos->esta_ofi_traba_equipo="ASIGNADO";
                    break;
                
            }
        }
        return $ofi_traba_equipo;
    }
}
