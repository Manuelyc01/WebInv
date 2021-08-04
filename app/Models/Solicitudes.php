<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solicitudes extends Model
{
    //
    protected $table = 'tm_solicitudes';
    protected $primaryKey = 'id_solicitud';
    public $timestamps = true;
    protected $fillable = [        
        'cod_solicitud',
        'nom_solicitud',
        'esta_solicitud'
    ];
}
