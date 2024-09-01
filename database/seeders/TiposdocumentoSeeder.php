<?php

namespace Database\Seeders;

use App\Models\Tiposdocumento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TiposdocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipo = new Tiposdocumento();
        $tipo->codigo = "CC";
        $tipo->descripcion = "CÉDULA DE CIUDADANÍA";
        $tipo->usuario_create     = "PHOENIX";
        $tipo->usuario_update     = "PHOENIX";
        $tipo->save();

        $tipo = new Tiposdocumento();
        $tipo->codigo = "CE";
        $tipo->descripcion = "CÉDULA DE EXTRANJERÍA";
        $tipo->usuario_create     = "PHOENIX";
        $tipo->usuario_update     = "PHOENIX";
        $tipo->save();

        $tipo = new Tiposdocumento();
        $tipo->codigo = "NI";
        $tipo->descripcion = "SIN IDENTIFICACIÓN";
        $tipo->usuario_create     = "PHOENIX";
        $tipo->usuario_update     = "PHOENIX";
        $tipo->save();
    }
}
