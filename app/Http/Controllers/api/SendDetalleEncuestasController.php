<?php
namespace App\Http\Controllers\api;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\JsonResponse;

use App\Http\Controllers\Controller;
use App\Models\Detalledeencuesta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SendDetalleEncuestasController extends Controller
{
    public function SendDetalleEncuestas(Request $request):JsonResponse
    {
        $contador = 0;
        $encuestas = json_decode($request->datadetencuestas);   
        $equipo   = $request->equipo;            

        if (isset($request->datadetencuestas))
        {             
            $contador = 0;     
            try 
            {      
                foreach ($encuestas as $item)
                {
                    $contador++;       
                    $encuestaid     = $item->encuesta_id;   
                    $categoriaid    = $item->categoria_id;      
                    $idplantilla    = $item->idplantilla;  
                    $iddetalle      = $item->iddetalle;   
                    $tipo           = $item->tipo;                        
                     
                    DB::statement('SET FOREIGN_KEY_CHECKS=0;');
                       
                    Detalledeencuesta::updateOrCreate(['equipo'=>$equipo,'encuesta_id'=>$encuestaid,'categoria_id'=>$categoriaid,
                     'idplantilla'=>$idplantilla,'iddetalle'=>$iddetalle,'tipo'=>$tipo],
                    [
                        "descripcion"       => $item->descripcion,
                        "seleccion"         => $item->seleccion,
                        "datonum"           => $item->datonum,
                        "datotexto"         => $item->datotexto,
                        "datosi"            => $item->datosi,
                        "datono"            => $item->datono,
                        "equipo"            => $equipo,                
                        "estado"            => 1,
                        "usuario_create"    => "PHOENIX24",
                        "usuario_update"    => "PHOENIX24",
                    ]);       
                    DB::statement('SET FOREIGN_KEY_CHECKS=1;');   
                }
            } catch (\Exception $ex) {
                return response()->json(
                    [
                    'status'   => '4040404 OK',
                    'msg'      => 'Error en el FOR',
                    'error' => $ex,
                    ],Response::HTTP_BAD_REQUEST);    
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
                ],Response::HTTP_ACCEPTED); 
        }
    }
}
