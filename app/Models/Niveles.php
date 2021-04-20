<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Niveles extends Model
{
    protected $table = 'niveles';

    protected $fillable = [        
        'nombre',
        'slug'
    ];

    public function setNombreAttribute($value)
	{
        $this->attributes['nombre'] = $value;
		$this->attributes['slug'] = str_slug($value, '-');
    }
    
}