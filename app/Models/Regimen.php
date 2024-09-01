<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regimen extends Model
{
    use HasFactory;
    protected $table = "regimenes";

    protected $fillable = [
        'nombre',
        'usuario_create',
        'usuario_update'
    ];
}
