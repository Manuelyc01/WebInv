<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    use \Dimsav\Translatable\Translatable;
    protected $table = 'sede';

	public $translatedAttributes = [
        'nombre',
        'slug',
        'arraySucursal',
        'arrayAgencia',
        'arrayUnidad'
	];

    protected $fillable = [   
        'imagenMapa'
    ];

    
}