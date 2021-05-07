<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InsumoIndustrial extends Model
{
    //
    use \Dimsav\Translatable\Translatable;
    protected $table = 'insumo_industrial';

	public $translatedAttributes = [
        'tituloListado',
        'desListado',
        'slug',
        'tituloB1',
        'desB1'
	];

    protected $fillable = [        
        'imagenFondoListado',
        'imagenCaladaListado',
        'imagenFondo'
    ];
}