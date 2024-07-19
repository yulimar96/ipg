<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NuevoPozo extends Model
{
    protected $fillable = [
        'nombre_pozo',
        'fperforacion',
        'administrado',
        'produccion',
        'habitantes_beneficiados',
        'estado',
        'municipio',
        'parroquia',
        'sector',
        'hpmotor',
        'voltaje',
        'tipovoltaje',
        'modelo',
        'hpbomba',
        'altura',
        'diametro',
    ];
}
