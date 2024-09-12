<?php

namespace Database\Seeders;

use App\Models\Configdirecciones;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigdireccionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $config = new Configdirecciones();
        $config->codigo = "CLL";
        $config->usuario_create     = "PHOENIX";
        $config->usuario_update     = "PHOENIX";
        $config->save();

        $config = new Configdirecciones();
        $config->codigo = "KRA";
        $config->usuario_create     = "PHOENIX";
        $config->usuario_update     = "PHOENIX";
        $config->save();

        $config = new Configdirecciones();
        $config->codigo = "TRANSV";
        $config->usuario_create     = "PHOENIX";
        $config->usuario_update     = "PHOENIX";
        $config->save();

        $config = new Configdirecciones();
        $config->codigo = "(ESQUINA)";
        $config->usuario_create     = "PHOENIX";
        $config->usuario_update     = "PHOENIX";
        $config->save();

        $config = new Configdirecciones();
        $config->codigo = "BIS";
        $config->usuario_create     = "PHOENIX";
        $config->usuario_update     = "PHOENIX";
        $config->save();

        $config = new Configdirecciones();
        $config->codigo = "URBANIZACIÓN";
        $config->usuario_create     = "PHOENIX";
        $config->usuario_update     = "PHOENIX";
        $config->save();

        $config = new Configdirecciones();
        $config->codigo = "CASA";
        $config->usuario_create     = "PHOENIX";
        $config->usuario_update     = "PHOENIX";
        $config->save();

        $config = new Configdirecciones();
        $config->codigo = "LOTE";
        $config->usuario_create     = "PHOENIX";
        $config->usuario_update     = "PHOENIX";
        $config->save();

        $config = new Configdirecciones();
        $config->codigo = "BODEGA";
        $config->usuario_create     = "PHOENIX";
        $config->usuario_update     = "PHOENIX";
        $config->save();

        $config = new Configdirecciones();
        $config->codigo = "EDIFICIO";
        $config->usuario_create     = "PHOENIX";
        $config->usuario_update     = "PHOENIX";
        $config->save();

        $config = new Configdirecciones();
        $config->codigo = "#";
        $config->usuario_create     = "PHOENIX";
        $config->usuario_update     = "PHOENIX";
        $config->save();

    }
}
