<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    use HasFactory;

    protected $table = "zonas";

    protected $fillable = [
        'descripcion',
        'usuario_create',
        'usuario_update',
    ];
}
