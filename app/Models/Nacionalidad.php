<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nacionalidad extends Model
{
    use HasFactory;

    protected $table = "nacionalidades";

    protected $fillable = [
        'nombre',
        'usuario_create',
        'usuario_update'
    ];
}
