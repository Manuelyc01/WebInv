<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CateServicio extends Model
{
    use \Dimsav\Translatable\Translatable;
    protected $table = 'cate_servicio';

	public $translatedAttributes = [
        'nombre',
        'slug'
	];

    protected $fillable = [  
        //
    ];
}