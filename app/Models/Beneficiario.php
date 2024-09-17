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
        'equipo',
        'tipodocumento',
        'estadoidentificacion',
        'nombres',
        'apellidos',
        'direccion',
        'telefono',
        'email',
        'fechadenacimiento',
        'area',
        'sexo',
        'rutafotos',
        'gradoescolaridad',
        'estadocivil',
        'estado',
        'barrio_id',
        'ciudad_id',  
        'unidadadministrativa_id',
        'estrato_id',
        'zona_id',
        'contacto',
        'telefonocontacto',
        'zona',
        'barrio',
        'sisben',
        'usuario_create',
        'usuario_update'
    ];
}

