<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configdirecciones extends Model
{
    use HasFactory;
    protected $table = "configdirecciones";

    protected $fillable = [
        'codigo',
        'usuario_create',
        'usuario_update'
    ];
}
