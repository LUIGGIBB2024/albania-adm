<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plantilla extends Model
{
    use HasFactory;

    protected $table = "plantillas";

    protected $fillable = [
        'idplantilla',
        'iddetalle',
        'tipo',
        'descripcion',
        'seleccion',
        'datonum',
        'datosi',
        'datono',
        'estado'
    ];
}
