<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    protected $table = 'tm_sede';
    protected $primaryKey = 'id_sede';

    public $timestamps = false;

    protected $fillable = [  
        'id_sede',      
        'co_sede',
        'no_sede',
        'de_sede'
    ];    
}