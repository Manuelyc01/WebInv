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
    ];
    
    public function setTituloListadoAttribute($value)
	{
        $this->attributes['tituloListado'] = $value;
		$this->attributes['slug'] = str_slug($value, '-');
	}
}