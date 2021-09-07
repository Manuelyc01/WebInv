<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $table = 'tm_documentos';
    protected $primaryKey = 'id_documento';


    protected $fillable = [        
        'nom_documento',
        'est_documento',       
        'id_equipo',
        'id_componente',
        'url',
        'id_ofi_traba_equi_compo',
    ];    
}