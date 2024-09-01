<?php

namespace Database\Seeders;

use App\Models\Eps;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EpsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $eps_arr = ["COOMEVA E.P.S-S","SALUDCOOP E.P.S","E.P.S. SANITAS","HUMANAVIVIR E.P.S.","SALUD TOTAL E.P.S","SALUDVIDA E.P.S",
                    "NUEVA EPS","FAMISANAR E.P.S","COOSALUD E.P.S","CAJACOPI E.P.S","CAFESALUD E.P.S","EPS BARRIOS UNIDOS","DUSAKAWI E.P.S.I",
                    "MEDIMAS E.P.S","ANAS WAYUU E.P.S.I","MALLAMAS E.P.S.I","ASMET SALUD E.P.S.I","EPS SURA","ASOCIACION INDIGENA DEL CAUCA E.P.S.I"];
        for($i=0;$i<=18;$i++)
        {
            $eps    = new Eps();
            $eps->nombre = $eps_arr[$i];
            $eps->regimen = "";
            $eps->usuario_create   = "PHOENIX";
            $eps->usuario_update   = "PHOENIX";
            $eps->save();
        }

    }
}
