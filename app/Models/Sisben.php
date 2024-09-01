<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sisben extends Model
{
    use HasFactory;

    protected $table = "sisben";

    protected $fillable = [
        'categoria',
        'descripcion',
        'usuario_create',
        'usuario_update'
    ];
}

