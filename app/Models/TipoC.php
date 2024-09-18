<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoC extends Model
{
    use HasFactory;

    protected $table = 'tipo_de_contrato';

    
    protected $fillable = [
        'codTipoContrato',
        'DescripcionTipoContrato',
    ];
}
