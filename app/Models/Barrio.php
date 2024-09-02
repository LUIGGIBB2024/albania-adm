<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barrio extends Model
{
    use HasFactory;
    protected $table = "barrios";

    protected $fillable = [
        'nombre',
        'tipo',
        'ciudad_id',
        'unidadadministrativa_id',
        'usuario_create',
        'usuario_update'
    ];
}
