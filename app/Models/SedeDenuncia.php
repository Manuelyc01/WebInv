<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SedeDenuncia extends Model
{
    use \Dimsav\Translatable\Translatable;
    protected $table = 'sede_denuncia';

	public $translatedAttributes = [
        'nombre'
	];

    protected $fillable = [   
    ];

    
}