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
	];

    protected $fillable = [        
        'imagenFondoListado',
        'imagenCaladaListado'
    ];
}