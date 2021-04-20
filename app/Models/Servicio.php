<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use \Dimsav\Translatable\Translatable;
    protected $table = 'servicio';

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
        'cate_servicio_id',
        'fechaFin'
    ];

    public function Departamento()
	{
		return $this->belongsTo(Departamento::class, 'departamento_id');
    }

    public function CategoriaServicio()
	{
		return $this->belongsTo(CategoriaServicio::class, 'cate_servicio_id');
    }
}