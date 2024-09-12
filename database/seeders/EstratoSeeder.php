<?php

namespace Database\Seeders;

use App\Models\Estrato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstratoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estrato = new Estrato();
        $estrato->descripcion       = "1 - BAJO - BAJO";
        $estrato->usuario_create    = "PHOENIX";
        $estrato->usuario_update    = "PHOENIX";
        $estrato->save();

        $estrato = new Estrato();
        $estrato->descripcion       = "2 - BAJO";
        $estrato->usuario_create    = "PHOENIX";
        $estrato->usuario_update    = "PHOENIX";
        $estrato->save();

        $estrato = new Estrato();
        $estrato->descripcion       = "3 - MEDIO - ALTO";
        $estrato->usuario_create    = "PHOENIX";
        $estrato->usuario_update    = "PHOENIX";
        $estrato->save();

        $estrato = new Estrato();
        $estrato->descripcion       = "4 - MEDIO";
        $estrato->usuario_create    = "PHOENIX";
        $estrato->usuario_update    = "PHOENIX";
        $estrato->save();

        $estrato = new Estrato();
        $estrato->descripcion       = "5 - MEDIO - ALTO";
        $estrato->usuario_create    = "PHOENIX";
        $estrato->usuario_update    = "PHOENIX";
        $estrato->save();

        $estrato = new Estrato();
        $estrato->descripcion       = "6 - ALTO";
        $estrato->usuario_create    = "PHOENIX";
        $estrato->usuario_update    = "PHOENIX";
        $estrato->save();

    }
}
