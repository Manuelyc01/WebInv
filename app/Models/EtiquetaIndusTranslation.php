<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EtiquetaIndusTranslation extends Model
{
    protected $table = 'etiqueta_indus_translations';

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