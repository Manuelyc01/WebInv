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
        'id_equipo'
    ];    
}