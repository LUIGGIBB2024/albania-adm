<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Plantilla;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\JsonResponse;

class ApiPlantillasController extends Controller
{
    public function GetTemplates(Request $request):JsonResponse
    {
        $plantillas = Plantilla::select('id','idplantilla','iddetalle','tipo','descripcion','seleccion',
          'datonum','datotexto','datosi','datono','estado')->get();
        return response()->json(
            [
            'status'            => '200',
            'msg'               => 'Actualización Exitosa',
            'dataplantillas'    => $plantillas,
            ],Response::HTTP_ACCEPTED);
    }
}
