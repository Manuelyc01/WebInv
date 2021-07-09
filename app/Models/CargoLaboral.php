<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CargoLaboral extends Model
{
    //
    protected $table = 'tm_cargo_laboral';
    protected $primaryKey = 'id_cargo_laboral';
    public $timestamps = false;
    protected $fillable = [        
        'id_cargo_laboral',
        'co_cargo_laboral',
        'no_cargo_laboral',
        'de_cargo_laboral'
    ];
}
