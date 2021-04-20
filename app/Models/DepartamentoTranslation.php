<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DepartamentoTranslation extends Model
{
    protected $table = 'departamento_translations';

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