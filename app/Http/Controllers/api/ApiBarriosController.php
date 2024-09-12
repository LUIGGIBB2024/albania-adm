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
        $barrios = Barrio::select('nombre','tipo','ciudad_id as ciudadid','unidadadministrativa_id as unidadadministrativaid')->get();
        return response()->json(
            [
            'status'            => '200',
            'status5'            => '2005',
            'msg'               => 'Actualización Exitosa',
            'databarrios'       => $barrios,
            ],Response::HTTP_ACCEPTED);
    }
}
