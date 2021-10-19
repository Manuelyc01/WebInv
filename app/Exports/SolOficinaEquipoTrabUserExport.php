<?php

namespace App\Exports;

use App\Models\SolOficinaEquipoTrab;

use Maatwebsite\Excel\Concerns\FromCollection;
use DB;
class SolOficinaEquipoTrabUserExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        /*
        @$solicitudes=SolOficinaEquipoTrab::leftjoin('tm_ofi_traba_equipo','tm_ofi_traba_equipo.id_ofi_traba_equipo','=','tm_soli_ofi_equi_traba.id_ofi_traba_equipo')
                    ->leftjoin('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_soli_ofi_equi_traba.id_ofi_trabajador')
                    ->leftjoin('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')
                    ->leftjoin('tm_solicitudes','tm_solicitudes.id_solicitud','=','tm_soli_ofi_equi_traba.id_solicitud')
                    ->select('tm_soli_ofi_equi_traba.id_soli_ofi_equi_tra','tm_soli_ofi_equi_traba.descripcion_solicitud','tm_ofi_traba_equipo.no_equipo','tm_soli_ofi_equi_traba.esta_soli_soli_ofi_equi_traba',
                    'tm_soli_ofi_equi_traba.created_at','tm_solicitudes.nom_solicitud')
                    ->get();
        */
        @$solicitudes=SolOficinaEquipoTrab::leftjoin('tm_ofi_traba_equipo','tm_ofi_traba_equipo.id_ofi_traba_equipo','=','tm_soli_ofi_equi_traba.id_ofi_traba_equipo')
                    ->leftjoin('tm_ofi_trabajador','tm_ofi_trabajador.id_ofi_trabajador','=','tm_soli_ofi_equi_traba.id_ofi_trabajador')
                    ->leftjoin('tm_colaborador','tm_colaborador.id_colaborador','=','tm_ofi_trabajador.id_colaborador')
                    ->leftjoin('tm_solicitudes','tm_solicitudes.id_solicitud','=','tm_soli_ofi_equi_traba.id_solicitud')
                    ->select('tm_soli_ofi_equi_traba.id_soli_ofi_equi_tra','tm_solicitudes.nom_solicitud','tm_soli_ofi_equi_traba.descripcion_solicitud',
                            'tm_soli_ofi_equi_traba.esta_soli_soli_ofi_equi_traba','tm_colaborador.nu_documento','tm_colaborador.no_colaborador'
                            ,'tm_colaborador.ap_paterno_colaborador','tm_colaborador.ap_materno_colaborador','tm_ofi_traba_equipo.no_equipo','tm_ofi_traba_equipo.sis_operativo')
                    ->get();            
        foreach ($solicitudes as $solicitud) {
            # code...
            if($solicitud->esta_soli_soli_ofi_equi_traba==1){
                $solicitud->esta_soli_soli_ofi_equi_traba="FINALIZADO";
            }
            if($solicitud->esta_soli_soli_ofi_equi_traba==2){
                $solicitud->esta_soli_soli_ofi_equi_traba="EN PROCESO";
            }
            else{
                $solicitud->esta_soli_soli_ofi_equi_traba="RECIBIDO";
            }
        }
        
        return @$solicitudes;
    }
}
