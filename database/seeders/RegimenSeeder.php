<?php

namespace Database\Seeders;

use App\Models\Regimen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegimenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regimen    = new Regimen();
        $regimen->nombre            = "CONTRIBUTIVO";
        $regimen->usuario_create    = "PHOENIX";
        $regimen->usuario_update    = "PHOENIX";
        $regimen->save();

        $regimen    = new Regimen();
        $regimen->nombre            = "SUBSIDIADO";
        $regimen->usuario_create    = "PHOENIX";
        $regimen->usuario_update    = "PHOENIX";
        $regimen->save();

        $regimen    = new Regimen();
        $regimen->nombre            = "RÉGIMEN ESPECIAL";
        $regimen->usuario_create    = "PHOENIX";
        $regimen->usuario_update    = "PHOENIX";
        $regimen->save();

        $regimen    = new Regimen();
        $regimen->nombre            = "NO ASEGURADO";
        $regimen->usuario_create    = "PHOENIX";
        $regimen->usuario_update    = "PHOENIX";
        $regimen->save();

    }
}
