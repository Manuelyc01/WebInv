<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProdIndusTranslation extends Model
{
    protected $table = 'prod_indus_translations';

    public $fillable = [
        'nombre',
        'slug',
        'des',
        'arrayPresentaciones',
        'fichaPDF',
        'arrayBeneficios',
        'tituloRelacionados'
    ];

    protected $casts =[
        'arrayPresentaciones' => 'array',
        'arrayBeneficios' => 'array'
    ];
    
    public function setNombreAttribute($value)
	{
        $this->attributes['nombre'] = $value;
		$this->attributes['slug'] = str_slug($value, '-');
	}
    
    
    
}