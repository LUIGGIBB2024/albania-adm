<?php

namespace Database\Seeders;

use App\Models\Sisben;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SisbenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Procesando Grupo A
        for($i=1;$i<=5;$i++)
        {
            $sisben = new Sisben();
            $sisben->categoria = "A" . $i;
            $sisben->usuario_create   = "PHOENIX";
            $sisben->usuario_update   = "PHOENIX";
            $sisben->save();
        }

        // Procesando Grupo B
        for($i=1;$i<=7;$i++)
        {
            $sisben = new Sisben();
            $sisben->categoria = "B" . $i;
            $sisben->usuario_create   = "PHOENIX";
            $sisben->usuario_update   = "PHOENIX";
            $sisben->save();
        }

        // Procesando Grupo C
        for($i=1;$i<=18;$i++)
        {
            $sisben = new Sisben();
            $sisben->categoria = "C" . $i;
            $sisben->usuario_create   = "PHOENIX";
            $sisben->usuario_update   = "PHOENIX";
            $sisben->save();
        }

        // Procesando Grupo D
        for($i=1;$i<=21;$i++)
        {
            $sisben = new Sisben();
            $sisben->categoria = "D" . $i;
            $sisben->usuario_create   = "PHOENIX";
            $sisben->usuario_update   = "PHOENIX";
            $sisben->save();
        }



    }
}
