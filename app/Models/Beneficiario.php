<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiario extends Model
{
    use HasFactory;
    protected $table = "beneficiarios";

    protected $fillable = [
        'cedula',
        'tipodocumento',
        'nombres',
        'apellidos',
        'direccion',
        'telefono',
        'email',
        'fechadenacimiento',
        'area',
        'sexo',
        'gradoescolaridad',
        'estadocivil',
        'estado',
        'barrio_id',
        'ciudad_id',
        'estrato_id',
        'contacto',
        'telefonocontacto',
        'zona',
        'barrio',
        'sisben',
        'usuario_create',
        'usuario_update'
    ];
}

