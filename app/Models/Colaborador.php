<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Colaborador extends Authenticatable
{
    use Notifiable;
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