<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListoConsumir extends Model
{
    //
    use \Dimsav\Translatable\Translatable;
    protected $table = 'listo_consumir';
    
    public $translatedAttributes = [
        'tituloListado',
        'desListado',
        'slug'
	];

    protected $fillable = [        
        'imagenFondoListado',
        'imagenCaladaListado'
    ];
}