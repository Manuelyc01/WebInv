<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OfiTrabajadorEquipo extends Model
{
    //
    protected $table = 'tm_ofi_traba_equipo';
    protected $primaryKey = 'id_ofi_traba_equipo';

    

    protected $fillable = [
        'no_equipo',
        'sis_operativo',
        'estado_equipo',
        'esta_ofi_traba_equipo',
        'id_equipo',
        'id_ofi_trabajador'
    ];  
}
