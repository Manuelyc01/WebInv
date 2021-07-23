<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OficinaTrabajador extends Model
{
    //
    protected $table = 'tm_ofi_trabajador';
    protected $primaryKey = 'id_ofi_trabajador';

    public $timestamps = false;

    protected $fillable = [        
        'id_ofi_trabajador',
        'id_oficina',
        'id_cargo_laboral',
        'id_colaborador',
        'est_trabajador'
    ];  
}
