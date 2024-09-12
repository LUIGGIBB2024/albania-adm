<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidadadministrativa extends Model
{
    use HasFactory;

    protected $table = "unidadadministrativa";

    protected $fillable = [
        'descripcion',
        'categoria',
        'zona_id',
        'usuario_create',
        'usuario_update'
    ];
}
