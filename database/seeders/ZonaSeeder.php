<?php

namespace Database\Seeders;

use App\Models\Zona;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ZonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $zona = new Zona();

        $zona->descripcion      = "URBANA";
        $zona->usuario_create   = "PHOENIX";
        $zona->usuario_update   = "PHOENIX";

        $zona->save();

        $zona = new Zona();
        $zona->descripcion      = "RURAL";
        $zona->usuario_create   = "PHOENIX";
        $zona->usuario_update   = "PHOENIX";

        $zona->save();


    }
}
