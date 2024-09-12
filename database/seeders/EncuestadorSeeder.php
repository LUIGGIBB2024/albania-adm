<?php

namespace Database\Seeders;

use App\Models\Encuestador;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EncuestadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $encuestador = new Encuestador();
        $encuestador->cedula = "77023910";
        $encuestador->nombre = "BERNAL BARROSO LUIS ALBERTO";
        $encuestador->direccion = "CALLE 20 # 12-10";
        $encuestador->telefono = "3004113793";
        $encuestador->email = "enlacevisualcis@gmail.com";
        $encuestador->password = "12345";
        $encuestador->profesion = "INGENIERO DE SISTEMAS";
        $encuestador->estado = 1;
        $encuestador->codigo = "";
        $encuestador->usuario_create   = "PHOENIX";
        $encuestador->usuario_update   = "PHOENIX";
        $encuestador->save();
    }
}
