<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ComponenteTrabajadorEquipo extends Model
{
    protected $table = 'tm_ofi_traba_equi_compo';
    protected $primaryKey = 'id_ofi_traba_equi_compo';

    protected $fillable = [        
        'esta_ofi_traba_equi_compo',
        'id_ofi_traba_equipo',
        'id_componente'
    ];    
}