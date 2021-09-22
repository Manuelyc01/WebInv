<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SolOficinaEquipoTrab extends Model
{
    //
    protected $table = 'tm_soli_ofi_equi_traba';
    protected $primaryKey = 'id_soli_ofi_equi_tra';

    public $timestamps = true;

    protected $fillable = [
        'descripcion_solicitud',
        'fotos',
        'doc_diagnostico',
        'esta_soli_soli_ofi_equi_traba',
        'id_solicitud',
        'id_ofi_traba_equipo',
        'id_ofi_trabajador',
        'esta_solicitud'
    ];  
}