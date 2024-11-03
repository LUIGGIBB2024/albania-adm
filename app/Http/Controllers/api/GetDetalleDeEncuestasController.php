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
       return response()->json(
        [
          'status'      => '400 OK',
          'msg'         => 'Actualización Exitosa',   
          //'data'        => $desderegistro . "-" .$hastaregistro,   
          'infodata'    => $request->all(),
        ],Response::HTTP_ACCEPTED);

      if (isset($request->data))
        {
          $infodata   = $request->data;
          return response()->json(
            [
              'status'      => '200 OK',
              'msg'         => 'Actualización Exitosa',   
              //'data'        => $desderegistro . "-" .$hastaregistro,   
              'infodata'    => $infodata,
            ],Response::HTTP_ACCEPTED);

           

            foreach ($infodata as $item)
            {
              
              $desderegistro      =  $item["desde_reg"];   
              $hastaregistro      =  $item["hasta_reg"];  
    
              try
              {
                $detalles = Detalledeencuesta::offset($desderegistro)->limit($hastaregistro)->get();
              }catch (\Exception $ex) 
              {
                return response()->json(
                    [
                    'status'   => '400',
                    'msg'      => 'Error en el FOR',
                    'error' => $ex,
                    ],Response::HTTP_BAD_REQUEST);    
              } 
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
      return response()->json(
        [
          'status'   => '400',
          'msg'      => 'No hubo actualización',
          //'encuestas' => $encuestas,
        ],Response::HTTP_BAD_REQUEST); 

    }
}
