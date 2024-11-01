<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Beneficiario;
use Illuminate\Http\Request;

use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\JsonResponse;

class GetBeneficiariosController extends Controller
{
    public function GetBeneficiarios(Request $request):JsonResponse
    {
        Beneficiario::where('barrio','like','%SERGIO HER%')
                    ->update(['barrio'=>'SERGIO HERNANDEZ - ALBANIA (ZONA URBANA)']);

        $beneficiarios = Beneficiario::All();
        $contador = 1;
        if ($contador > 0)
        {            
            return response()->json(
            [
              'status'      => '200 OK',
              'msg'         => 'Actualización Exitosa',   
              'data'        => $beneficiarios,       
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
