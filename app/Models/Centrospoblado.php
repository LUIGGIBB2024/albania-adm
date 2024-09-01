<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centrospoblado extends Model
{
    use HasFactory;

    protected $table = "centrospoblados";

    protected $fillable = [
        'nombre',
        'ciudad_id',
        'usuario_create',
        'usuario_update'
    ];
}
