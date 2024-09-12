<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiposdocumento extends Model
{
    use HasFactory;

    protected $table = "tiposdocumentos";

    protected $fillable = [
        'codigo',
        'descripcion',
        'usuario_create',
        'usuario_update'
    ];
}
