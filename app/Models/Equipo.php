<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'tm_equipos';
    protected $primaryKey = 'id_equipo';


    protected $fillable = [        
        'serie_equipo',
        'cod_opatrimonial',
        'des_equipo',
        'tipoBien',
        'esta_equipo',
        'id_cat_equipos'
    ];    
}