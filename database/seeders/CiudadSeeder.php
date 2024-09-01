<?php

namespace Database\Seeders;

use App\Models\Ciudad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ciudad                     = new Ciudad();
        $ciudad->nombre             = "ALBANIA";
        $ciudad->departamento_id    = 1;
        $ciudad->usuario_create     = "PHOENIX";
        $ciudad->usuario_update     = "PHOENIX";
        $ciudad->save();

    }
}
