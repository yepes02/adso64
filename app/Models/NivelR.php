<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NivelR extends Model
{
    use HasFactory;

    protected $table = 'nivel_de_riesgo';

    
    protected $fillable = [
        'codNivelRiesgo',
        'descripcion',
    ];
}
