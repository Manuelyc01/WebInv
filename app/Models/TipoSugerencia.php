<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoSugerencia extends Model
{
    use \Dimsav\Translatable\Translatable;
    protected $table = 'tipo_sugerencia';

	public $translatedAttributes = [
        'nombre'
	];

    protected $fillable = [   
        'orden'
    ];

    
}