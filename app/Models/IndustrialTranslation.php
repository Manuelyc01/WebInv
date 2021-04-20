<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IndustrialTranslation extends Model
{
    protected $table = 'industrial_translations';

    public $fillable = [
        'tituloListado',
        'desListado',
        'slug',
        'tituloB1',
        'desB1'
    ];
    
    public function setTituloListadoAttribute($value)
	{
        $this->attributes['tituloListado'] = $value;
		$this->attributes['slug'] = str_slug($value, '-');
	}
    
}