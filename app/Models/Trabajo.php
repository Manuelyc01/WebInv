<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{
    use \Dimsav\Translatable\Translatable;
    protected $table = 'trabajo';

	public $translatedAttributes = [
        'titulo',
        'des',
        'url',
        'pdf',
        'tipo'
	];

    protected $fillable = [  
        'visible',
        'departamento_id',
        'fechaFin'
    ];

    public function Departamento()
	{
		return $this->belongsTo(Departamento::class, 'departamento_id');
    }

    
}