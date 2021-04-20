<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use \Dimsav\Translatable\Translatable;
    protected $table = 'cargo';

	public $translatedAttributes = [
        'nombre',
        'slug'
	];

    protected $fillable = [        
    ];

    
}