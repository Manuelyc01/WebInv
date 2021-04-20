<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EtiquetaIndus extends Model
{
    use \Dimsav\Translatable\Translatable;
    protected $table = 'etiqueta_indus';

	public $translatedAttributes = [
        'nombre',
        'slug'
	];

    protected $fillable = [  
        //  
    ];

    
}