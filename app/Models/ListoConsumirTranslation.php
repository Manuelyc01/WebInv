<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListoConsumirTranslation extends Model
{
    //
    protected $table = 'listo_consumir_translations';

    public $fillable = [
        'tituloListado',
        'desListado',
        'slug'
    ];
    
    public function setTituloListadoAttribute($value)
	{
        $this->attributes['tituloListado'] = $value;
		$this->attributes['slug'] = str_slug($value, '-');
	}
}