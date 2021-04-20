<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TradicionalTranslation extends Model
{
    protected $table = 'tradicional_translations';

    public $fillable = [
        'tituloListado',
        'desListado',
        'slug',
        'tituloB1',
        'desB1',
        'arrayB1',
        'tituloB2',
        'desB2'
    ];
    
    protected $casts =[
        'arrayB1' => 'array',
    ];

    public function setTituloB1Attribute($value)
	{
        $this->attributes['tituloB1'] = $value;
		$this->attributes['slug'] = str_slug($value, '-');
	}
    
}