<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Componente extends Model
{
    protected $table = 'tm_componentes';
    protected $primaryKey = 'id_componente';

    protected $fillable = [        
        'serie_componente',
        'des_componente',
        'esta_componente',
        'fotos_componente',
        'id_cat_componentes'
    ];    
}