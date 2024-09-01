<?php

namespace Database\Seeders;

use App\Models\Nacionalidad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NacionalidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nacion                     = new Nacionalidad();
        $nacion->nombre             = "COLOMBIANA";
        $nacion->usuario_create     = "PHOENIX";
        $nacion->usuario_update     = "PHOENIX";
        $nacion->save();

        $nacion                     = new Nacionalidad();
        $nacion->nombre             = "VENEZOLANA";
        $nacion->usuario_create     = "PHOENIX";
        $nacion->usuario_update     = "PHOENIX";
        $nacion->save();

        $nacion                     = new Nacionalidad();
        $nacion->nombre             = "OTRAS";
        $nacion->usuario_create     = "PHOENIX";
        $nacion->usuario_update     = "PHOENIX";
        $nacion->save();


    }
}
