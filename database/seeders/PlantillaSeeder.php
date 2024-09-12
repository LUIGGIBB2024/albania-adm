<?php

namespace Database\Seeders;

use App\Models\Plantilla;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlantillaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Procesar Condiciones Laborales
        $detalle = ["EMPLEADO","DESEMPLEADO","PENSIONADO","INDEPENDIENTE","INACTIVO","OTROS"];
        $cuantos = count($detalle);

        for ($i = 0; $i < $cuantos; $i++)
        {
            $plantilla                  = new Plantilla();
            $plantilla->idplantilla     = 1;
            $plantilla->iddetalle       = $i+1;
            $plantilla->tipo            = 1;
            $plantilla->seleccion       = "SINO";
            $plantilla->descripcion     = $detalle[$i];
            $plantilla->datonum         = 0;
            $plantilla->datotexto       = "";
            $plantilla->datosi          = "";
            $plantilla->datono          = "NO";
            $plantilla->estado          = 1;
            $plantilla->usuario_create  = "PHOENIX";
            $plantilla->usuario_update  = "PHOENIX";
            $plantilla->save();
        }
        /////////////////////////////////////////////////////

        // Procesar Componente dinámica familiar
        $detalle = ["VIVE CON SU CONYUGE","VIVE CON LOS HIJOS","VIVE CON  FAMILIAR","PERSONA DIFERENTE A FAMILIAR","VIVE SOLO"];
        $cuantos = count($detalle);

        for ($i = 0; $i < $cuantos; $i++)
        {
            $plantilla                  = new Plantilla();
            $plantilla->idplantilla     = 2;
            $plantilla->iddetalle       = $i+1;
            $plantilla->tipo            = 1;
            $plantilla->seleccion       = "SINO";
            $plantilla->descripcion     = $detalle[$i];
            $plantilla->datonum         = 0;
            $plantilla->datotexto       = "";
            $plantilla->datosi          = "";
            $plantilla->datono          = "NO";
            $plantilla->estado          = 1;
            $plantilla->usuario_create  = "PHOENIX";
            $plantilla->usuario_update  = "PHOENIX";
            $plantilla->save();
        }
        $plantilla                  = new Plantilla();
        $plantilla->idplantilla     = 2;
        $plantilla->iddetalle       = $i+1;
        $plantilla->tipo            = 1;
        $plantilla->seleccion       = "INGNUM";
        $plantilla->descripcion     = "No. DE PERSONAS EN EL HOGAR";
        $plantilla->datonum         = 0;
        $plantilla->datotexto       = "";
        $plantilla->datosi          = "";
        $plantilla->datono          = "";
        $plantilla->estado          = 1;
        $plantilla->usuario_create  = "PHOENIX";
        $plantilla->usuario_update  = "PHOENIX";
        $plantilla->save();

        /////////////////////////////////////////////////////
        // Procesar Condiciones de desplazamientos
        $detalle = ["VÍCTIMA DEL CONFLICTO ARMADO","VIOLENCIA PSICOLÓGICA","VIOLENCIA FÍSICA (INTRAFAMILIAR)","VIOLENCIA ECONÓMICA",
                    "VIOLACIÓN A SUS DERECHOS","DE QUIEN DEPENDE ECONÓMICAMENTE"];
        $cuantos = count($detalle);

        for ($i = 0; $i < $cuantos; $i++)
        {
            $plantilla                  = new Plantilla();
            $plantilla->idplantilla     = 3;
            $plantilla->iddetalle       = $i+1;
            $plantilla->tipo            = 1;
            $plantilla->seleccion       = ($i<$cuantos-1)?"SINO":"INGTXT";
            $plantilla->descripcion     = $detalle[$i];
            $plantilla->datonum         = 0;
            $plantilla->datotexto       = "";
            $plantilla->datosi          = "";
            $plantilla->datono          = "NO";
            $plantilla->estado          = 1;
            $plantilla->usuario_create  = "PHOENIX";
            $plantilla->usuario_update  = "PHOENIX";
            $plantilla->save();
        }
        /////////////////////////////////////////////////////
        // Procesar Información de DiscapacidaD
        $detalle = ["EN SISTEMA MOTOR","EN SISTEMA NERVIOSO","EN LOS OJOS ","EN LOS OÍDOS",
                    "EN LA VOZ Y EL HABLA","EN LA DIGESTIÓN Y EL METABOLISMO","EN EL SISTEMA GENITAL Y REPRODUCTIVO","OTROS"];
        $cuantos = count($detalle);

        for ($i = 0; $i < $cuantos; $i++)
        {
            $plantilla                  = new Plantilla();
            $plantilla->idplantilla     = 4;
            $plantilla->iddetalle       = $i+1;
            $plantilla->tipo            = 1;
            $plantilla->seleccion       = ($i<$cuantos-1)?"SINO":"INGTXT";
            $plantilla->descripcion     = $detalle[$i];
            $plantilla->datonum         = 0;
            $plantilla->datotexto       = "";
            $plantilla->datosi          = "";
            $plantilla->datono          = "NO";
            $plantilla->estado          = 1;
            $plantilla->usuario_create  = "PHOENIX";
            $plantilla->usuario_update  = "PHOENIX";
            $plantilla->save();
        }
        /////////////////////////////////////////////////////
        // Procesar Salud Mental
        $detalle = ["DEPRESION","SENSACION DE SOLEDAD","PENSAMIENTO SUICIDA","ALCOHOLISMO",
                    "DEPENDENCIA A SUSTANCIAS PSICOACTIVAS","ALZHEIMER","ALGÚN TIPO DE TRASTORNO MENTAL","OTROS"];
        $cuantos = count($detalle);

        for ($i = 0; $i < $cuantos; $i++)
        {
            $plantilla                  = new Plantilla();
            $plantilla->idplantilla     = 5;
            $plantilla->iddetalle       = $i+1;
            $plantilla->tipo            = 1;
            $plantilla->seleccion       = ($i<$cuantos-1)?"SINO":"INGTXT";
            $plantilla->descripcion     = $detalle[$i];
            $plantilla->datonum         = 0;
            $plantilla->datotexto       = "";
            $plantilla->datosi          = "";
            $plantilla->datono          = "NO";
            $plantilla->estado          = 1;
            $plantilla->usuario_create  = "PHOENIX";
            $plantilla->usuario_update  = "PHOENIX";
            $plantilla->save();
        }
        /////////////////////////////////////////////////////
        // Procesar Condiciones de Viviendas
        $detalle = ["VIVIENDA PROPIA","ARRENDAMIENTO","FAMILIAR","VIVE EN CONDICIONES CALLE",
                    "SERVICIOS PUBLICOS","DUERME SOLO","DUERME CON OTRA PERSONAL"];
        $cuantos = count($detalle);

        for ($i = 0; $i < $cuantos; $i++)
        {
            $plantilla                  = new Plantilla();
            $plantilla->idplantilla     = 6;
            $plantilla->iddetalle       = $i+1;
            $plantilla->tipo            = 1;
            $plantilla->seleccion       = ($i<$cuantos-1)?"SINO":"SINO";
            $plantilla->descripcion     = $detalle[$i];
            $plantilla->datonum         = 0;
            $plantilla->datotexto       = "";
            $plantilla->datosi          = "";
            $plantilla->datono          = "NO";
            $plantilla->estado          = 1;
            $plantilla->usuario_create  = "PHOENIX";
            $plantilla->usuario_update  = "PHOENIX";
            $plantilla->save();
        }
        /////////////////////////////////////////////////////
        // Procesar Grupo Poblacional
        $detalle = ["INDIGENA","AFRODESENDIENTE","LGBTIQ+","NINGUMO"];
        $cuantos = count($detalle);

        for ($i = 0; $i < $cuantos; $i++)
        {
            $plantilla                  = new Plantilla();
            $plantilla->idplantilla     = 7;
            $plantilla->iddetalle       = $i+1;
            $plantilla->tipo            = 1;
            $plantilla->seleccion       = "SELECUNO";
            $plantilla->descripcion     = $detalle[$i];
            $plantilla->datonum         = 0;
            $plantilla->datotexto       = "";
            $plantilla->datosi          = "";
            $plantilla->datono          = "";
            $plantilla->estado          = 1;
            $plantilla->usuario_create  = "PHOENIX";
            $plantilla->usuario_update  = "PHOENIX";
            $plantilla->save();
        }
        /////////////////////////////////////////////////////
        // Procesar Régimen SGSS
        $detalle = ["CONTRIBUTIVO","SUBSIDIADO","NO ASEGURADO","RÉGIMEN ESPECIAL","NINGUNO"];
        $cuantos = count($detalle);

        for ($i = 0; $i < $cuantos; $i++)
        {
            $plantilla                  = new Plantilla();
            $plantilla->idplantilla     = 8;
            $plantilla->iddetalle       = $i+1;
            $plantilla->tipo            = 1;
            $plantilla->seleccion       = "SELECUNO";
            $plantilla->descripcion     = $detalle[$i];
            $plantilla->datonum         = 0;
            $plantilla->datotexto       = "";
            $plantilla->datosi          = "";
            $plantilla->datono          = "";
            $plantilla->estado          = 1;
            $plantilla->usuario_create  = "PHOENIX";
            $plantilla->usuario_update  = "PHOENIX";
            $plantilla->save();
        }
       /////////////////////////////////////////////////////
       // Procesar eps SGSS
       $detalle = ["EPS A QUE PERTENCE:"];
       $cuantos = count($detalle);

       for ($i = 0; $i < $cuantos; $i++)
       {
            $plantilla                  = new Plantilla();
            $plantilla->idplantilla     = 9;
            $plantilla->iddetalle       = $i+1;
            $plantilla->tipo            = 1;
            $plantilla->seleccion       = "ESCOGER";
            $plantilla->descripcion     = $detalle[$i];
            $plantilla->datonum         = 0;
            $plantilla->datotexto       = "";
            $plantilla->datosi          = "";
            $plantilla->datono          = "";
            $plantilla->estado          = 1;
            $plantilla->usuario_create  = "PHOENIX";
            $plantilla->usuario_update  = "PHOENIX";
            $plantilla->save();
       }
       /////////////////////////////////////////////////////
       // Procesar Salud General
       $detalle = ["DIABETES","HIPERTENSIÓN","INFECCIÓN RENAL","CANCER","LUPUS","TUBERCULOSIS","TIROIDES","OTROS"];
       $cuantos = count($detalle);

       for ($i = 0; $i < $cuantos; $i++)
       {
            $plantilla                  = new Plantilla();
            $plantilla->idplantilla     = 10;
            $plantilla->iddetalle       = $i+1;
            $plantilla->tipo            = 1;
            $plantilla->seleccion       = ($i<$cuantos-1)?"SINO":"INGTXT";
            $plantilla->descripcion     = $detalle[$i];
            $plantilla->datonum         = 0;
            $plantilla->datotexto       = "";
            $plantilla->datosi          = "";
            $plantilla->datono          = "";
            $plantilla->estado          = 1;
            $plantilla->usuario_create  = "PHOENIX";
            $plantilla->usuario_update  = "PHOENIX";
            $plantilla->save();
       }
       /////////////////////////////////////////////////////
       // Procesar Salud Visual
       $detalle = ["BAJA VISIÓN","RETINOPATÍA DIABÉTICA","GLAUCOMA ","CATARATA","OTROS"];
       $cuantos = count($detalle);

       for ($i = 0; $i < $cuantos; $i++)
       {
            $plantilla                  = new Plantilla();
            $plantilla->idplantilla     = 11;
            $plantilla->iddetalle       = $i+1;
            $plantilla->tipo            = 1;
            $plantilla->seleccion       = ($i<$cuantos-1)?"SINO":"INGTXT";
            $plantilla->descripcion     = $detalle[$i];
            $plantilla->datonum         = 0;
            $plantilla->datotexto       = "";
            $plantilla->datosi          = "";
            $plantilla->datono          = "";
            $plantilla->estado          = 1;
            $plantilla->usuario_create  = "PHOENIX";
            $plantilla->usuario_update  = "PHOENIX";
            $plantilla->save();
       }
       /////////////////////////////////////////////////////
       // Procesar Salud Bucal
       $detalle = ["USA PRÓTESIS DENTAL","NECESITA PRÓTESIS DENTAL","CONSERVA ALGUNOS MOLARES","NO CONSERVA NINGÚN MOLAR",
                   "PRESENTA DOLOR O INFLAMACIÓN EN SUS ENCÍAS","FUMADOR","ULTIMA VISITA AL ODONTÓLOGO"];
       $cuantos = count($detalle);

       for ($i = 0; $i < $cuantos; $i++)
       {
            $plantilla                  = new Plantilla();
            $plantilla->idplantilla     = 12;
            $plantilla->iddetalle       = $i+1;
            $plantilla->tipo            = 1;
            $plantilla->seleccion       = ($i<$cuantos-1)?"SINO":"INGNUM";
            $plantilla->descripcion     = $detalle[$i];
            $plantilla->datonum         = 0;
            $plantilla->datotexto       = "";
            $plantilla->datosi          = "";
            $plantilla->datono          = "";
            $plantilla->estado          = 1;
            $plantilla->usuario_create  = "PHOENIX";
            $plantilla->usuario_update  = "PHOENIX";
            $plantilla->save();
       }
       /////////////////////////////////////////////////////
       // Procesar Condiciones de seguridad Alimentaria
       $detalle = ["INAPETENCIA","USA SUPLEMENTOS","DIETA CONTROLADA","DIAGNÓSTICO DE SOBREPESO",
                   "DIAGNÓSTICO DE DESNUTRICIÓN","CUANTAS RACIONES DIARIAS DE COMIDA CONSUME","PESO (Kgs)",
                   "TALLA (M)","IMC"];
       $cuantos = count($detalle);

       for ($i = 0; $i < $cuantos; $i++)
       {
            $plantilla                  = new Plantilla();
            $plantilla->idplantilla     = 13;
            $plantilla->iddetalle       = $i+1;
            $plantilla->tipo            = 1;
            $plantilla->seleccion       = ($i<$cuantos-4)?"SINO":"INGNUM";
            $plantilla->descripcion     = $detalle[$i];
            $plantilla->datonum         = 0;
            $plantilla->datotexto       = "";
            $plantilla->datosi          = "";
            $plantilla->datono          = "";
            $plantilla->estado          = 1;
            $plantilla->usuario_create  = "PHOENIX";
            $plantilla->usuario_update  = "PHOENIX";
            $plantilla->save();
       }
       /////////////////////////////////////////////////////
       // Procesar Síntomas al realizar la encuesta
       $detalle = ["DOLOR DE CABEZA","FIEBRE","PERDIDA DEL OLFATO O GUSTO","DEFICIENCIA RESPIRATORIA",
                   "MALESTAR GENERAL","OTROS"];
       $cuantos = count($detalle);

       for ($i = 0; $i < $cuantos; $i++)
       {
            $plantilla                  = new Plantilla();
            $plantilla->idplantilla     = 14;
            $plantilla->iddetalle       = $i+1;
            $plantilla->tipo            = 1;
            $plantilla->seleccion       = ($i<$cuantos-1)?"SINO":"SINO";
            $plantilla->descripcion     = $detalle[$i];
            $plantilla->datonum         = 0;
            $plantilla->datotexto       = "";
            $plantilla->datosi          = "";
            $plantilla->datono          = "";
            $plantilla->estado          = 1;
            $plantilla->usuario_create  = "PHOENIX";
            $plantilla->usuario_update  = "PHOENIX";
            $plantilla->save();
       }
       /////////////////////////////////////////////////////
       // Procesar Información Adicional
       $detalle = ["RECIBE SUBSIDIO DE COLOMBIA MAYOR","RECIBE PAQUETE NUTRICIONAL"];
       $cuantos = count($detalle);

       for ($i = 0; $i < $cuantos; $i++)
       {
            $plantilla                  = new Plantilla();
            $plantilla->idplantilla     = 15;
            $plantilla->iddetalle       = $i+1;
            $plantilla->tipo            = 1;
            $plantilla->seleccion       = ($i<$cuantos-1)?"SINO":"SINO";
            $plantilla->descripcion     = $detalle[$i];
            $plantilla->datonum         = 0;
            $plantilla->datotexto       = "";
            $plantilla->datosi          = "";
            $plantilla->datono          = "";
            $plantilla->estado          = 1;
            $plantilla->usuario_create  = "PHOENIX";
            $plantilla->usuario_update  = "PHOENIX";
            $plantilla->save();
       }
       /////////////////////////////////////////////////////
       // Procesar Información de Desarrollo Economico
       $detalle = ["HABILIDADES QUE POSEE:"];
       $cuantos = count($detalle);

       for ($i = 0; $i < $cuantos; $i++)
       {
            $plantilla                  = new Plantilla();
            $plantilla->idplantilla     = 16;
            $plantilla->iddetalle       = $i+1;
            $plantilla->tipo            = 1;
            $plantilla->seleccion       = ($i<$cuantos-1)?"ESCOGER":"ESCOGER";
            $plantilla->descripcion     = $detalle[$i];
            $plantilla->datonum         = 0;
            $plantilla->datotexto       = "";
            $plantilla->datosi          = "";
            $plantilla->datono          = "";
            $plantilla->estado          = 1;
            $plantilla->usuario_create  = "PHOENIX";
            $plantilla->usuario_update  = "PHOENIX";
            $plantilla->save();
       }
       /////////////////////////////////////////////////////



    }
}

