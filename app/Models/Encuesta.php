<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    use HasFactory;

    protected $table = "encuestas";

    protected $fillable = [
        'codigo',
        'fechadiligenciamiento',
        'latitud',
        'longitud',
        'estrato_id',
        'beneficiario_id',
        'detalles_id',
        'estado',
        'usuario_create',
        'usuario_update',
    ];
}

