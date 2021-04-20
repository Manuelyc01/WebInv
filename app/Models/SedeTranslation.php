<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SedeTranslation extends Model
{
    protected $table = 'sede_translations';

    public $fillable = [
        'nombre',
        'slug',
        'arraySucursal',
        'arrayAgencia',
        'arrayUnidad'
    ];

    protected $casts =[
        'arraySucursal' => 'array',
        'arrayAgencia' => 'array',
        'arrayUnidad' => 'array'
    ];
    
    public function setNombreAttribute($value)
	{
        $this->attributes['nombre'] = $value;
		$this->attributes['slug'] = str_slug($value, '-');
	}
    
}