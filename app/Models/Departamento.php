<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use \Dimsav\Translatable\Translatable;
    protected $table = 'departamento';

	public $translatedAttributes = [
        'nombre',
        'slug'
	];

    protected $fillable = [   
        //     
    ];

    
}