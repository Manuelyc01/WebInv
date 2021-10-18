<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ColaboradorUbicacion extends Model
{
    protected $table = 'tm_colaborador_ubicacion';

    protected $primaryKey = 'id';
    
    public $timestamps = false;
    protected $fillable = [   
        'id',     
        'id_colaborador',
        'id_sede',
        'estado'
    ];
}
