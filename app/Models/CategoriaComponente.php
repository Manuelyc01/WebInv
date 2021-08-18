<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriaComponente extends Model
{
    //
    protected $table = 'tm_categoria_componentes';
    protected $primaryKey = 'id_cat_componentes';
    public $timestamps = true;
    protected $fillable = [        
        'id_cat_componentes',
        'des_cate_componentes',
        'esta_cate_componentes'
    ];
}
