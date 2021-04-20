<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EtiquetaTradi extends Model
{
    use \Dimsav\Translatable\Translatable;
    protected $table = 'etiqueta_tradi';

	public $translatedAttributes = [
        'nombre'
	];

    protected $fillable = [    
    ];

    
}