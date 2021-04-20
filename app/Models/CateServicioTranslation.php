<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CateServicioTranslation extends Model
{
    protected $table = 'cate_servicio_translations';

    public $fillable = [
        'nombre',
        'slug'
    ];
    
    public function setNombreAttribute($value)
	{
        $this->attributes['nombre'] = $value;
		$this->attributes['slug'] = str_slug($value, '-');
	}
    
}