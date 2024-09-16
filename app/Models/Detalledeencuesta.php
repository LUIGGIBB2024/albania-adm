<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalledeencuesta extends Model
{
    use HasFactory;

    protected $table = "detalledeencuestas";

    protected $fillable = [
        'encuesta_id',
        'equipo',
        'categoria_id',
        'idplantilla',
        'iddetalle',
        'tipo',
        'categoria_id',
        'descripcion',
        'seleccion',
        'datonum',
        'datotexto',
        'datosi',
        'datono',
        'estado',
        'usuario_create',
        'usuario_update',
    ];
}
