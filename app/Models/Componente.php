<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Componente extends Model
{
    protected $table = 'tm_componentes';
    protected $primaryKey = 'id_componete';

    protected $fillable = [        
        'serie_componete',
        'des_componete',
        'esta_componete',
        'fotos_componete',
        'id_cat_componentes'
    ];    
}