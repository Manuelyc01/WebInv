<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oficina extends Model
{
    protected $table = 'tm_oficina';
    protected $primaryKey = 'id_oficina';

    public $timestamps = false;

    protected $fillable = [        
        'id_sede',
        'co_oficina',
        'no_oficina',
        'de_oficina'
    ];    
}