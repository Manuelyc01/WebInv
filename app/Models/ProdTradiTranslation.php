<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProdTradiTranslation extends Model
{
    protected $table = 'prod_tradi_translations';

    public $fillable = [
        'nombre',
        'slug',
        'des',
        'zonaVenta',
        'array',
        'tituloRelacionados',
        'documento'
    ];

    protected $casts =[
        'array' => 'array'
    ];
    
    public function setNombreAttribute($value)
	{
        $this->attributes['nombre'] = $value;
		$this->attributes['slug'] = str_slug($value, '-');
	}
    
    
    
}