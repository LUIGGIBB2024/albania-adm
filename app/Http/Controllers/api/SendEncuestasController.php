<?php

namespace App\Http\Controllers\api;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\JsonResponse;

use App\Http\Controllers\Controller;
use App\Models\Encuesta;
use Illuminate\Http\Request;

class SendEncuestasController extends Controller
{
    public function SendEncuestas(Request $request):JsonResponse
    {
        $encuestas = $request->dataencuestas;
        $encuestas = json_decode($request->dataencuestas);           
        $contador = 0;    
        $equipo   = $request->equipo;   

      
        return response()->json(
            [
             'status'   => '2000 OK',
             'msg'      => 'Entré aquí Actualización Exitosa',
             'encuestas' => $encuestas,
             'equipo' => $equipo,
            ],Response::HTTP_ACCEPTED);
        
  
       if (isset($request->data))
       {
        
            $encuestas         = json_decode($request->dataencuestas);           
            $contador = 0; 
            
            return response()->json(
                [
                 'status'   => '2000 OK',
                 'msg'      => 'Entré aquí Actualización Exitosa',
                 'encuestas' => $encuestas,
                ],Response::HTTP_ACCEPTED);

            foreach ($encuestas as $item)
            {
                return response()->json(
                    [
                     'status'   => '2000 OK',
                     'msg'      => 'Entré aquí Actualización Exitosa',
                     //'encuestas' => $encuestas,
                    ],Response::HTTP_ACCEPTED);

                 $contador++;
                 $fecha         = $item["fecha"];
                 $id            = $item["id"];
                 $codigo        = $item["codigo"];

                 return response()->json(
                    [
                     'status'   => '2000 OK',
                     'msg'      => 'Entré aquí Actualización Exitosa',
                     //'encuestas' => $encuestas,
                    ],Response::HTTP_ACCEPTED);

                 Encuesta::updateOrCreate(['id'=>$id,'codigo'=>$codigo],
                 [
                    "fechadiligenciamiento" => $fecha,
                    "latitud" => $item["latitud"],
                    "longitud" => $item["longitud"],
                    "cedula" => $item["cedula"],
                    "nombre" => $item["nombre"],
                    "equipo" => $equipo,
                    "estrato_id" => 0,
                    "beneficiario_id" => 0,
                    "detalledeencuesta_id" => 0,
                    "estado" => 1,
                    "usuario_create" => "PHOENIX24",
                    "usuario_update" => "PHOENIX24",
                 ]);          
            }
       }

        if ($contador > 0)
        {            
            return response()->json(
                [
                'status'   => '200 OK',
                'msg'      => 'Actualización Exitosa',
                //'encuestas' => $encuestas,
                ],Response::HTTP_ACCEPTED);
        } else
        {
            return response()->json(
                [
                'status'   => '200 OK',
                'msg'      => 'No hubo actualización',
                //'encuestas' => $encuestas,
                ],Response::HTTP_BAD_REQUEST); 
        }
    }
}
