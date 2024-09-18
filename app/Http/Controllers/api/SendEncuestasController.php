<?php

namespace App\Http\Controllers\api;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\JsonResponse;

use App\Http\Controllers\Controller;
use App\Models\Encuesta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SendEncuestasController extends Controller
{
    public function SendEncuestas(Request $request):JsonResponse
    {
        //$encuestas = $request->dataencuestas;

       $encuestas = json_decode($request->dataencuestas);                 
           
       $contador = 0;    
       $equipo   = $request->equipo;           
  
       if (isset($request->dataencuestas))
       {             
            $contador = 0;          

                    
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            foreach ($encuestas as $item)
            {
                $contador++;      
                $fecha         = $item->fecha;
                $idencuesta    = $item->id;
                $codigo        = $item->codigo;                
                DB::beginTransaction();        
                Encuesta::updateOrCreate(['idencuesta_local'=>$idencuesta,'equipo'=>$equipo],
                [         
                    "fechadiligenciamiento"     => $fecha,
                    "latitud"                   => $item->latitud,
                    "longitud"                  => $item->longitud,
                    "cedula"                    => $item->cedula,
                    "nombre"                    => $item->nombre,
                    "codigo"                    => $codigo,
                    "estrato_id"                => 0,
                    "beneficiario_id"           => 0,
                    "detalledeencuesta_id"      => 0,
                    "estado"                    => 1,
                    "usuario_create"            => "PHOENIX24",
                    "usuario_update"            => "PHOENIX24",
                ]);       
                DB::commit();             
            }
            
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');   
              
        }

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
