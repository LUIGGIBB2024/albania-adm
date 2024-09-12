<?php

namespace Database\Seeders;

use App\Models\Barrio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarrioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Procesar Barrios de Albania
        $barrio = new Barrio();
        $barrio->nombre             = "CENTRO";
        $barrio->unidadadministrativa_id  = 1;
        $barrio->ciudad_id                = 1;
        $barrio->tipo               = "BARRIOS";
        $barrio->usuario_create     = "PHOENIX";
        $barrio->usuario_update     = "PHOENIX";
        $barrio->save();

        $barrio = new Barrio();
        $barrio->nombre             = "SAN MARTIN";
        $barrio->unidadadministrativa_id  = 1;
        $barrio->ciudad_id                = 1;
        $barrio->tipo               = "BARRIOS";
        $barrio->usuario_create     = "PHOENIX";
        $barrio->usuario_update     = "PHOENIX";
        $barrio->save();

        $barrio = new Barrio();
        $barrio->nombre             = "EL CARMEN";
        $barrio->unidadadministrativa_id  = 1;
        $barrio->ciudad_id                = 1;
        $barrio->tipo               = "BARRIOS";
        $barrio->usuario_create     = "PHOENIX";
        $barrio->usuario_update     = "PHOENIX";
        $barrio->save();

        $barrio = new Barrio();
        $barrio->nombre             = "26 DE FEBRERO";
        $barrio->unidadadministrativa_id  = 1;
        $barrio->ciudad_id                = 1;
        $barrio->tipo               = "BARRIOS";
        $barrio->usuario_create     = "PHOENIX";
        $barrio->usuario_update     = "PHOENIX";
        $barrio->save();

        $barrio = new Barrio();
        $barrio->nombre             = "7 DE AGOSTO";
        $barrio->unidadadministrativa_id  = 1;
        $barrio->ciudad_id                = 1;
        $barrio->tipo               = "BARRIOS";
        $barrio->usuario_create     = "PHOENIX";
        $barrio->usuario_update     = "PHOENIX";
        $barrio->save();

        $barrio = new Barrio();
        $barrio->nombre             = "EL MOLINO";
        $barrio->unidadadministrativa_id  = 1;
        $barrio->ciudad_id                = 1;
        $barrio->tipo               = "BARRIOS";
        $barrio->usuario_create     = "PHOENIX";
        $barrio->usuario_update     = "PHOENIX";
        $barrio->save();

        $barrio = new Barrio();
        $barrio->nombre             = "EL SILENCIO";
        $barrio->unidadadministrativa_id  = 1;
        $barrio->ciudad_id                = 1;
        $barrio->tipo               = "BARRIOS";
        $barrio->usuario_create     = "PHOENIX";
        $barrio->usuario_update     = "PHOENIX";
        $barrio->save();

        $barrio = new Barrio();
        $barrio->nombre             = "DIVINO NIÑO";
        $barrio->unidadadministrativa_id  = 1;
        $barrio->ciudad_id                = 1;
        $barrio->tipo               = "BARRIOS";
        $barrio->usuario_create     = "PHOENIX";
        $barrio->usuario_update     = "PHOENIX";
        $barrio->save();

        $barrio = new Barrio();
        $barrio->nombre             = "CASAS DUPLEX";
        $barrio->unidadadministrativa_id  = 1;
        $barrio->ciudad_id                = 1;
        $barrio->tipo               = "BARRIOS";
        $barrio->usuario_create     = "PHOENIX";
        $barrio->usuario_update     = "PHOENIX";
        $barrio->save();

        $barrio = new Barrio();
        $barrio->nombre             = "VILLA ONE";
        $barrio->unidadadministrativa_id  = 1;
        $barrio->ciudad_id                = 1;
        $barrio->tipo               = "BARRIOS";
        $barrio->usuario_create     = "PHOENIX";
        $barrio->usuario_update     = "PHOENIX";
        $barrio->save();

        $barrio = new Barrio();
        $barrio->nombre             = "SERGIO HERNANDEZ";
        $barrio->unidadadministrativa_id  = 1;
        $barrio->ciudad_id                = 1;
        $barrio->tipo               = "BARRIOS";
        $barrio->usuario_create     = "PHOENIX";
        $barrio->usuario_update     = "PHOENIX";
        $barrio->save();

        $barrio = new Barrio();
        $barrio->nombre             = "CIUDAD ALBANIA";
        $barrio->unidadadministrativa_id  = 1;
        $barrio->ciudad_id                = 1;
        $barrio->tipo               = "BARRIOS";
        $barrio->usuario_create     = "PHOENIX";
        $barrio->usuario_update     = "PHOENIX";
        $barrio->save();

        // Procesar Barrios de Cuestecitas
        $barrios = ["CUESTECITAS","DIGNA ROSA","VILLA REINA","SAN FRANCISCO","LUNA DEL RIO","LUHOPU",
                    "VILLA RUMBO","EL CERRO","NUEVA AMÉRICA"];
        for($i=0;$i<=8;$i++)
        {
            $barrio = new Barrio();
            $barrio->nombre             = $barrios[$i];
            $barrio->unidadadministrativa_id  = 2;
            $barrio->ciudad_id                = 1;
            $barrio->tipo               = ($i==8)?"VEREDAS":"BARRIOS";
            $barrio->usuario_create     = "PHOENIX";
            $barrio->usuario_update     = "PHOENIX";
            $barrio->save();
        }

        // Procesar Barrios Porciosa
        $barrios = ["CENTRO POBLADO PORCIOSA","SANTA FE","LOS RANCHOS"];
        for($i=0;$i<=2;$i++)
        {
            $barrio = new Barrio();
            $barrio->nombre             = $barrios[$i];
            $barrio->unidadadministrativa_id  = 4;
            $barrio->ciudad_id                = 1;
            $barrio->tipo               = ($i>=1)?"VEREDAS":"BARRIOS";
            $barrio->usuario_create     = "PHOENIX";
            $barrio->usuario_update     = "PHOENIX";
            $barrio->save();
        }

        // Procesar Barrios Los Remedios
        $barrios = ["CENTRO","BARRIO NUEVO","BARRIO RAFAEL SOLANO","TIGRE POZO","EL ROCIO"];
        for($i=0;$i<=4;$i++)
        {
            $barrio = new Barrio();
            $barrio->nombre             = $barrios[$i];
            $barrio->unidadadministrativa_id  = 3;
            $barrio->ciudad_id                = 1;
            $barrio->tipo               = ($i>=3)?"VEREDAS":"BARRIOS";
            $barrio->usuario_create     = "PHOENIX";
            $barrio->usuario_update     = "PHOENIX";
            $barrio->save();
        }

        // Procesar Barrios Comunidades Indigenas
        $barrios = ["CAMPOHERRERA","LUHOPU","CARACOLI","SAN JOSE","PERRAINCHON","PALESPALEN","KARRALAPANA",
                    "SURRULAT","DAMASCO","GUAYACANAL2","PANCHOMANA","EL  ROCIO","PITULUMANA1","PITULUMANA2",
                    "KARIYUSHEIN","WARARRATCHON","CAÑAWATAMANA","TEKIA","LIMONCITO","PITULUMANA3",
                    "CHUISIRA","PITULUMANA4","PITULUMANA5","ITAKA2","DIVIDIVI","GUAYABITAL","VILLA ONE",
                    "LOMA FRESCA","KACHALERIO2","KANEWAKAT – UNAATPUCHON","KACHALERIO1","TOURETAKA","LIMASIRA","KAMUCHESEIN",
                    "KETPANA","PESUAN","SERRIYAMANA","ALITAMANA","ISHICHON","LAS TAPARITAS","WAYAKANAT","LOS MATICOS","LA HORQUETA2","CHARITO",
                    "ROYOSIRA","MARURI","PITULUMANA","WANETURUMANA","ZAPATAMANA","HORQUETA","NUEVO AMANECER",
                    "NUEVA ESPERANZA","POROICA","RESGUARDO 4 DE NOVIEMBRE","CABILDO GOBERNADOR","KANEWAKAT – WAREN WAREN",
                    "KOKOMANA","SHIRRAIN","POLUMANA","GUASIMAL","CARRETAMANA","AIPIAPULE","MOLOCONOSIR","JURIMAKAL","WANAPAREPO",
                    "WARRUTUMANA","SALARAKAT","KACHUTSAO","EL PARAISO","JUCHIMANA","NUEVO HORIZONTE","MURRENEKAT","CHINGOLITO",
                    "ORRLEE","MIRRALUU","MAÑUI","KACHARELOY","MALAWAINPA","LAS PALMITAS","TROCOMANA","JAVILLITO","RANCHO NUEVO",
                    "SHALEO","LOS OLIVOS","BELEN","LA MARAVILLA","KALINASIRA","VILLA LUZ","RESGUARDO SOLDADO PARATE BIEN","JARAROU",
                    "LA GLORIA","VIA PARRA","AMARE","ASIJUSHEIN","ORILLAMANA","PATSUARRALI","GUAYABAL","KAINSHAIPA","JIRRUMANA","WARE WAREN",
                    "WOTTOIN","CERRO PELAO","MALIRRANQUILU","TOLOMANA","JIYUICHON","MILAGRO( WALITCHITAO)","WARRARATCHON","LUMAKAT","GUAYACANAL",
                    "KURIATAKAT","KOLONASIRRA","COPOYOMANA","ITAKA","SARAVITA","PARRITCHON","LA FORTUNA","MALOUYEN"];

        $cuantos = count($barrios);
        for($i=0;$i<=$cuantos-1;$i++)
        {
            $barrio = new Barrio();
            $barrio->nombre             = $barrios[$i];
            $barrio->unidadadministrativa_id  = 5;
            $barrio->ciudad_id                = 1;
            $barrio->tipo               = "COMUNIDADES INDIGENAS";
            $barrio->usuario_create     = "PHOENIX";
            $barrio->usuario_update     = "PHOENIX";
            $barrio->save();
        }


    }
}
