<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubcatIndus extends Model
{
    use \Dimsav\Translatable\Translatable;
    protected $table = 'subcat_indus';

	public $translatedAttributes = [
        'nombre'
	];

    protected $fillable = [     
    ];

    
}