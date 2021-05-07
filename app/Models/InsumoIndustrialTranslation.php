<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InsumoIndustrialTranslation extends Model
{
    //
    protected $table = 'insu_indus_translations';

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