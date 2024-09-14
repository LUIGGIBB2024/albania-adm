<?php

namespace App\Http\Controllers\api;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\JsonResponse;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SendEncuestasController extends Controller
{
    public function SendEncuestas(Request $request):JsonResponse
    {
        $encuestas = $request->data;
        $contador = 0;
        return response()->json(
            [
             'status'   => '200 OK',
             'msg'      => 'Actualización Exitosa',
             'encuestas' => $encuestas,
            ],Response::HTTP_ACCEPTED);
    }
}
