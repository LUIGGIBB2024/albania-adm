<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encuestador extends Model
{
    use HasFactory;

    protected $table = "encuestadores";

    protected $fillable = [
        'cedula',
        'nombre',
        'direccion',
        'telefono',
        'email',
        'password',
        'profesion',
        'estado',
        'usuario_create',
        'usuario_update',
    ];
}
