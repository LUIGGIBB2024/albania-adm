<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Detalledeencuesta;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\JsonResponse;

class GetDetalleDeEncuestasController extends Controller
{
    public function GetDetalleDeEncuestas(Request $request):JsonResponse
    {
        // $data          = $request;     
        // return response()->json(
        //      [
        //        'status'      => '200 OK',
        //        'msg'         => 'Actualización Exitosa',   
        //        'data'        => $data->desdereg,       
        //      ],Response::HTTP_ACCEPTED);

        // $data          = json_decode($request);     
        $desderegistro = $request["desdereg"];
        $hastaregistro = $request["hastareg"];
        $detalles = Detalledeencuesta::offset($desderegistro)->limit($hastaregistro)->get();
        $contador = 1;
        if ($contador > 0)
        {            
            return response()->json(
            [
              'status'      => '200 OK',
              'msg'         => 'Actualización Exitosa',   
              'data'        => $detalles,       
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
