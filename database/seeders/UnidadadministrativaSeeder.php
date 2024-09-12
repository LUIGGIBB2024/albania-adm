<?php

namespace Database\Seeders;

use App\Models\Unidadadministrativa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnidadadministrativaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $unidad = new Unidadadministrativa();
        $unidad->descripcion        = "ALBANIA (ZONA URBANA)";
        $unidad->categoria          = "MUNICIPIO";
        $unidad->zona_id            = 1;
        $unidad->usuario_create     = "PHOENIX";
        $unidad->usuario_update     = "PHOENIX";
        $unidad->save();

        $unidad = new Unidadadministrativa();
        $unidad->descripcion        = "CUESTECITAS";
        $unidad->categoria          = "CORREGIMIENTOS";
        $unidad->zona_id            = 2;
        $unidad->usuario_create     = "PHOENIX";
        $unidad->usuario_update     = "PHOENIX";
        $unidad->save();

        $unidad = new Unidadadministrativa();
        $unidad->descripcion        = "LOS REMEDIOS";
        $unidad->categoria          = "CORREGIMIENTOS";
        $unidad->zona_id            = 2;
        $unidad->usuario_create     = "PHOENIX";
        $unidad->usuario_update     = "PHOENIX";
        $unidad->save();

        $unidad = new Unidadadministrativa();
        $unidad->descripcion        = "PORCIOSA";
        $unidad->categoria          = "CORREGIMIENTOS";
        $unidad->zona_id            = 2;
        $unidad->usuario_create     = "PHOENIX";
        $unidad->usuario_update     = "PHOENIX";
        $unidad->save();

        $unidad = new Unidadadministrativa();
        $unidad->descripcion        = "COMUNIDADES INDIGENAS";
        $unidad->categoria          = "COMUNIDADES INDIGENAS";
        $unidad->zona_id            = 2;
        $unidad->usuario_create     = "PHOENIX";
        $unidad->usuario_update     = "PHOENIX";
        $unidad->save();

    }
}
