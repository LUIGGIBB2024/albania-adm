<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabladecontrol extends Model
{
    use HasFactory;

    protected $table = "tabladecontrol";

    protected $fillable = [
        'identificacion',
        'nombreempresa',
        'direccion',
        'telefono',
        'email',
        'rutalogo',
        'urlapi',
        'emailapi',
        'passwordapi',
        'usuario_create',
        'usuario_update'
    ];
}

