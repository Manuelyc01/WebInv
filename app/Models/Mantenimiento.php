<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model
{
    protected $table = 'tm_mantenimiento';
    protected $primaryKey = 'id_mantenimiento';
    public $timestamps = false;
    protected $fillable = [        
        'descripcion',
        'estado',
        'id_ofi_traba_equipo',
        'id_soli_ofi_equi_tra'
    ];    
}