<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SendEncuestasController extends Controller
{
    public function SendEncuestas(Request $request):JsonResponse
    {
        $contador = 0;
        return response()->json(
            [
             'status'   => '200 OK',
             'msg'      => 'Actualización Exitosa',
            ],Response::HTTP_ACCEPTED);
    }
}
