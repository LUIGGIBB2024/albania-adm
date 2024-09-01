<?php

namespace Database\Seeders;

use App\Models\Tabladecontrol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TabladecontrolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $control    = new Tabladecontrol();

        $control->identificacion = "891190431-8";
        $control->nombreempresa  = "ALCALDÍA DE ALBANIA";
        $control->direccion      = "CARRERA 4 # 4 - 48 BARRIO EL CENTRO";
        $control->email          = "contactenos@albania-laguajira.gov.co";
        $control->telefono       = "6057775286";
        $control->urlapi         = "";
        $control->emailapi       = "";
        $control->passwordapi    = "";
        $control->usuario_create     = "PHOENIX";
        $control->usuario_update     = "PHOENIX";
        $control->save();
    }
}

