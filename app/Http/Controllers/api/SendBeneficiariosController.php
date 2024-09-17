<?php

namespace App\Http\Controllers\api;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\JsonResponse;

use App\Http\Controllers\Controller;
use App\Models\Beneficiario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SendBeneficiariosController extends Controller
{
    public function SendBeneficiarios(Request $request):JsonResponse
    {
        $datobeneficiarios = json_decode($request->databeneficiarios);     
        $contador = 0;
        $equipo   = $request->equipo;              

        if (isset($request->databeneficiarios))
        {
            //$lista = [];
            $dato1 = "";
            $dato2 = "";
            $dato3= "";
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            foreach($datobeneficiarios as $item)
            {   
                $contador++;
                if ($contador == 1)
                {
                    $dato1 = $item->cedula; 
                }

                if ($contador == 2)
                {
                    $dato2 = $item->cedula; 
                }

                if ($contador == 3)
                {
                    $dato3 = $item->cedula; 
                }



                $cedula     = $item->cedula;
                //$lista[$contador] = $item->cedula;
                //DB::beginTransaction();  
                          
                //DB::commit();         
            }
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');   
        }     
    
        if ($contador > 0)
        {            
            return response()->json(
                [
                'status'   => '200 OK',
                'msg'      => 'Actualización Exitosa',
                'data'   => $datobeneficiarios,
                //'lista'   => $lista,
                'dato1'   => $dato1,
                'dato2'   => $dato2,
                'dato3'   => $dato3,
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
