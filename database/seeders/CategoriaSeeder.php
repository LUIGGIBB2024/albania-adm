<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Estado de ocupación
        $categoria = new Categoria();
        $categoria->descripcion = "CONDICIONES LABORALES";
        $categoria->titulo      = "Actualmente, en cual de las siguientes condiciones se encuentra ?:";
        $categoria->tipo        = "CONDICIONES LABORALES";
        $categoria->posicion    = 1;
        $categoria->proyecto    = "ALB-ADM";
        $categoria->usuario_create     = "PHOENIX";
        $categoria->usuario_update     = "PHOENIX";
        $categoria->save();

        // Dinámica Familiar
        $categoria = new Categoria();
        $categoria->descripcion = "COMPONENTE DINÁMICA FAMILIAR";
        $categoria->titulo      = "Información sobre la vivienda donde reside :";
        $categoria->tipo        = "VIVIENDA";
        $categoria->posicion    = 2;
        $categoria->proyecto    = "ALB-ADM";
        $categoria->usuario_create     = "PHOENIX";
        $categoria->usuario_update     = "PHOENIX";
        $categoria->save();

        // Dinámica Familiar
        $categoria = new Categoria();
        $categoria->descripcion = "CONDICIONES DE DESPLAZAMIENTO Y ABANDONO";
        $categoria->titulo      = "Sufre o ha sufrido alguna de estas condiciones ?:";
        $categoria->tipo        = "CONDICIÓN SOCIAL";
        $categoria->posicion    = 3;
        $categoria->proyecto    = "ALB-ADM";
        $categoria->usuario_create     = "PHOENIX";
        $categoria->usuario_update     = "PHOENIX";
        $categoria->save();

        // Información de discapacidad
        $categoria = new Categoria();
        $categoria->descripcion = "INFORMACIÓN DE DISCAPACIDAD";
        $categoria->titulo      = "En la actualidad, presenta disminución en alguna de las siguientes capacidades ?:";
        $categoria->tipo        = "DISCAPACIDAD";
        $categoria->posicion    = 4;
        $categoria->proyecto    = "ALB-ADM";
        $categoria->usuario_create     = "PHOENIX";
        $categoria->usuario_update     = "PHOENIX";
        $categoria->save();

        // Salud mental
        $categoria = new Categoria();
        $categoria->descripcion = "SALUD MENTAL";
        $categoria->titulo      = "Sufre actualmente de alguna de las siguientes condiciones ?:";
        $categoria->tipo        = "SALUD MENTAL";
        $categoria->posicion    = 5;
        $categoria->proyecto    = "ALB-ADM";
        $categoria->usuario_create     = "PHOENIX";
        $categoria->usuario_update     = "PHOENIX";
        $categoria->save();

        // Codiciones de vivienda
        $categoria = new Categoria();
        $categoria->descripcion = "CONDICIONES DE VIVIENDA";
        $categoria->titulo      = "Su vivienda es:";
        $categoria->tipo        = "VIVIENDA";
        $categoria->posicion    = 6;
        $categoria->proyecto    = "ALB-ADM";
        $categoria->usuario_create     = "PHOENIX";
        $categoria->usuario_update     = "PHOENIX";
        $categoria->save();

        // Grupo Poblacional
        $categoria = new Categoria();
        $categoria->descripcion = "GRUPO POBLACIONAL";
        $categoria->titulo      = "Hace parte, pertenece o se autoreconoce como :";
        $categoria->tipo        = "GRUPO POBLACIONAL";
        $categoria->posicion    = 7;
        $categoria->proyecto    = "ALB-ADM";
        $categoria->usuario_create     = "PHOENIX";
        $categoria->usuario_update     = "PHOENIX";
        $categoria->save();

        // Seguridad Social
        $categoria = new Categoria();
        $categoria->descripcion = "AFILIACIÓN AL SISTEMA DE SEGURIDAD SOCIAL (RÉGIMEN)";
        $categoria->titulo      = "A que régimen del SGSSS pertenece?:";
        $categoria->tipo        = "RÉGIMEN";
        $categoria->posicion    = 8;
        $categoria->proyecto    = "ALB-ADM";
        $categoria->usuario_create     = "PHOENIX";
        $categoria->usuario_update     = "PHOENIX";
        $categoria->save();

        // Seguridad Social
        $categoria = new Categoria();
        $categoria->descripcion = "AFILIACIÓN AL SISTEMA DE SEGURIDAD SOCIAL (EPS)";
        $categoria->titulo      = "A que empresa prestadora de salud pertenece ?:";
        $categoria->tipo        = "EPS";
        $categoria->posicion    = 9;
        $categoria->proyecto    = "ALB-ADM";
        $categoria->usuario_create     = "PHOENIX";
        $categoria->usuario_update     = "PHOENIX";
        $categoria->save();

        // Salud General
        $categoria = new Categoria();
        $categoria->descripcion = "SALUD GENERAL- ENFERMEDADES SUFRIDAS EN EL ÚLTIMO AÑO";
        $categoria->titulo      = "En este último año ha sufrido o ha padecido de las siguientes enfermedades ?:";
        $categoria->tipo        = "SALUD GENERAL";
        $categoria->posicion    = 10;
        $categoria->proyecto    = "ALB-ADM";
        $categoria->usuario_create     = "PHOENIX";
        $categoria->usuario_update     = "PHOENIX";
        $categoria->save();

        // Salud Visual
        $categoria = new Categoria();
        $categoria->descripcion = "SALUD VISUAL";
        $categoria->titulo      = "Tiene alguna disminución o padecimiento en :";
        $categoria->tipo        = "SALUD VISUAL";
        $categoria->posicion    = 11;
        $categoria->proyecto    = "ALB-ADM";
        $categoria->usuario_create     = "PHOENIX";
        $categoria->usuario_update     = "PHOENIX";
        $categoria->save();

         // Salud Bucal
         $categoria = new Categoria();
         $categoria->descripcion = "SALUD BUCAL";
         $categoria->titulo      = "Tiene alguna las siguientes condiciones ?:";
         $categoria->tipo        = "SALUD BUCAL";
         $categoria->posicion    = 12;
         $categoria->proyecto    = "ALB-ADM";
         $categoria->usuario_create     = "PHOENIX";
         $categoria->usuario_update     = "PHOENIX";
         $categoria->save();

         // Condiciones de Seguridad Alimentaria
         $categoria = new Categoria();
         $categoria->descripcion = "CONDICIONES DE SEGURIDAD ALIMENTARIA";
         $categoria->titulo      = "Diligenciar información :";
         $categoria->tipo        = "SEGURIDAD ALIMENTARIA";
         $categoria->posicion    = 13;
         $categoria->proyecto    = "ALB-ADM";
         $categoria->usuario_create     = "PHOENIX";
         $categoria->usuario_update     = "PHOENIX";
         $categoria->save();

         // Sintomas Actuales
         $categoria = new Categoria();
         $categoria->descripcion = "SÍNTOMAS AL REALIZAR LA ENCUESTA";
         $categoria->titulo      = "En este momento presenta síntomas como:";
         $categoria->tipo        = "SÍNTOMAS (ENFERMEDAD GENERAL)";
         $categoria->posicion    = 14;
         $categoria->proyecto    = "ALB-ADM";
         $categoria->usuario_create     = "PHOENIX";
         $categoria->usuario_update     = "PHOENIX";
         $categoria->save();

         // Informacion Adicional
         $categoria = new Categoria();
         $categoria->descripcion = "INFORMACIÓN ADICIONAL";
         $categoria->titulo      = "Diligenciar Información Adicional:";
         $categoria->tipo        = "INFORMACIÓN ADICIONAL";
         $categoria->posicion    = 15;
         $categoria->proyecto    = "ALB-ADM";
         $categoria->usuario_create     = "PHOENIX";
         $categoria->usuario_update     = "PHOENIX";
         $categoria->save();

         // Desarrollo económico
         $categoria = new Categoria();
         $categoria->descripcion = "INFORMACIÓN SOBRE DESARROLLO ECONÓMICO";
         $categoria->titulo      = "Que habilidades posee, y puede desarrollar ?:";
         $categoria->tipo        = "DESARROLLO ECONÓMICO";
         $categoria->posicion    = 16;
         $categoria->proyecto    = "ALB-ADM";
         $categoria->usuario_create     = "PHOENIX";
         $categoria->usuario_update     = "PHOENIX";
         $categoria->save();
    }
}
