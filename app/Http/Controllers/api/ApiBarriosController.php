<?php

namespace App\Http\Controllers\api;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\JsonResponse;

use App\Http\Controllers\Controller;
use App\Models\Barrio;
use Illuminate\Http\Request;

class ApiBarriosController extends Controller
{
    public function GetBarrios(Request $request):JsonResponse
    {
        $barrios = Barrio::select('id','nombre','tipo','ciudad_id','unidadadministrativa_id')->get();
        return response()->json(
            [
            'status'            => '200',
            'msg'               => 'Actualización Exitosa',
            'datacategorias'    => $barrios,
            ],Response::HTTP_ACCEPTED);
    }
}
