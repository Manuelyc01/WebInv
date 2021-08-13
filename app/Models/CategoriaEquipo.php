<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriaEquipo extends Model
{
    //
    protected $table = 'tm_categoria_equipos';
    protected $primaryKey = 'id_cat_equipos';
    public $timestamps = true;
    protected $fillable = [        
        'id_cat_equipos',
        'des_cate_equipo',
        'esta_cate_equipo'
    ];
}
