<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Detalledeencuesta;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use function Laravel\Prompts\error;

class GetDetalleDeEncuestasController extends Controller
{
    public function GetDetalleDeEncuestas(Request $request):JsonResponse
    {          
       
      if (isset($request))
        {
          $infodata   = $request;
          $desderegistro      =  $infodata["desde_reg"];   
          $hastaregistro      =  $infodata["hasta_reg"]; 

          try
              {
                $detalles = Detalledeencuesta::offset($desderegistro)->limit($hastaregistro)->get();
              }catch (\Exception $ex) 
              {
                return response()->json(
                    [
                    'status'   => '400',
                    'msg'      => 'Error en el SQL',
                    'error' => $ex,
                    ],Response::HTTP_BAD_REQUEST);    
              } 
              $contador = $detalles->count();
              if ($contador > 0)
              {            
                return response()->json(
                  [
                   'status'      => '200 OK',
                   'msg'         => 'Actualización Exitosa',   
                   'data'        => $detalles,       
                  ],Response::HTTP_ACCEPTED);
              }            
        }  
      else
          return response()->json(
            [
              'status'   => '400',
              'msg'      => 'No hubo actualización',
              //'encuestas' => $encuestas,
            ],Response::HTTP_BAD_REQUEST);        

    }
}
