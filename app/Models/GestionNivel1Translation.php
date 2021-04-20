<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GestionNivel1Translation extends Model
{
    protected $table = 'gestion_nivel1_translations';

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