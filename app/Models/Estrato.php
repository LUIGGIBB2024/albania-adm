<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estrato extends Model
{
    use HasFactory;

    protected $table = "estratos";

    protected $fillable = [
        'descripcion',
        'usuario_create',
        'usuario_update',
    ];
}


