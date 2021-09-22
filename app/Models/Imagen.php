<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $table = 'tm_imagenes';
    protected $primaryKey = 'id';


    protected $fillable = [        
        'nombre',
        'url',
        'id_equipo',
        'id_ofi_traba_equipo',
        'id_ofi_traba_equi_compo',
        'id_componente',
        'id_mantenimiento'
    ];    
}