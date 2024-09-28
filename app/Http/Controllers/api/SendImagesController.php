<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\JsonResponse;

class SendImagesController extends Controller
{
    public function SendImagesEncuestas(Request $request):JsonResponse
    {
        $contador = 0;

        $dataimages = $request->dataimages;
        $carpeta    = $dataimages->carpeta;

        return response()->json(
            [
            'status'    => '200 OK',
            'msg'       => 'No hubo actualización',
            'data'      => $dataimages,
            'carpeta'      => $carpeta,
            //'encuestas' => $encuestas,
            ],Response::HTTP_ACCEPTED); 

        if ($contador > 0)
        {            
            return response()->json(
                [
                'status'   => '200 OK',
                'msg'      => 'Actualización Exitosa',
                'contador' => $contador,
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
