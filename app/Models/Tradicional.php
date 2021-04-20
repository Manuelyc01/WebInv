<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tradicional extends Model
{
    use \Dimsav\Translatable\Translatable;
    protected $table = 'tradicional';

	public $translatedAttributes = [
        'tituloListado',
        'desListado',
        'slug',
        'tituloB1',
        'desB1',
        'arrayB1',
        'tituloB2',
        'desB2'
	];

    protected $fillable = [        
        'imagenFondoListado',
        'imagenCaladaListado',
        'imagenIzqB1',
        'imagenDerB1'
    ];

    
}