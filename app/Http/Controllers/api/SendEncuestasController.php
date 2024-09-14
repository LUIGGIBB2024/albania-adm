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
        $encuestas = $request->data;
        $contador = 0;       

        
  
       if (isset($request->data))
       {
            $encuestas         = $request->data;           
            $contador = 0;        

            foreach ($encuestas as $item)
            {
                 $fecha         = $item["fecha"];
                 $id            = $item["id"];
                 $codigo        = $item["codigo"];

                 Encuesta::updateOrCreate(['id'=>$id,'codigo'=>$codigo],
                 [
                    "fechadiligenciamiento" => $item["fecha"],
                    "latitud" => $item["latitud"],
                    "longitud" => $item["longitud"],
                    "cedula" => $item["cedula"],
                    "nombre" => $item["nombre"],
                    "estrato_id" => 0,
                    "beneficiario_id" => 0,
                    "detalledeencuesta_id" => 0,
                    "estado" => 1,
                    "usuario_created" => "PHOENIX24",
                    "usuario_updated" => "PHOENIX24",
                 ]);          
            }
       }

        return response()->json(
            [
             'status'   => '200 OK',
             'msg'      => 'Actualización Exitosa',
             //'encuestas' => $encuestas,
            ],Response::HTTP_ACCEPTED);
    }
}
