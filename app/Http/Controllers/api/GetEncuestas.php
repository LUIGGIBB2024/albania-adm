<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Encuesta;
use Illuminate\Http\Request;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class GetEncuestas extends Controller
{
    public function GetEncuestas(Request $request):JsonResponse
    { 
        $encuestas  = Encuesta::All();
        $contador   = Encuesta::Count();
        if ($contador > 0)
           {            
              return response()->json(
              [
                'status'      => '200 OK',
                'msg'         => 'Actualización Exitosa',   
                'data'        => $encuestas, 
                'contador'    => $contador,       
              ],Response::HTTP_ACCEPTED);
           } 
    }
}


