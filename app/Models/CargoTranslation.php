<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CargoTranslation extends Model
{
    protected $table = 'cargo_translations';

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