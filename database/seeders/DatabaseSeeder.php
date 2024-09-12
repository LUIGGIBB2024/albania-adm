<?php

namespace Database\Seeders;

use App\Models\Unidadadministrativa;
use App\Models\User;
use Faker\Provider\Barcode;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            ZonaSeeder::class,
            UnidadadministrativaSeeder::class,
            NacionalidadSeeder::class,
            EstratoSeeder::class,
            RegimenSeeder::class,
            SisbenSeeder::class,
            EncuestadorSeeder::class,
            UserSeeder::class,
            DepartamentoSeeder::class,
            CiudadSeeder::class,
            BarrioSeeder::class,
            ConfigdireccionesSeeder::class,
            EpsSeeder::class,
            CategoriaSeeder::class,
            PlantillaSeeder::class,
            TabladecontrolSeeder::class,
            TiposdocumentoSeeder::class
        ]);

    }
}
