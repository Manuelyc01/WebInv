<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    protected $table = 'tm_colaborador';
    protected $primaryKey = 'id_colaborador';
    public $timestamps = false;

    protected $fillable = [        
        'co_colaborador',
        'no_colaborador',
        'ap_paterno_colaborador',
        'ap_materno_colaborador',
        'nu_documento',
        'ti_documento',
        'usuario',
        'password',
        'email',
        'foto',
        'tipo_usuario'
    ];    
}