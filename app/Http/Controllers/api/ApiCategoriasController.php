<?php

namespace App\Http\Controllers\api;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\JsonResponse;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ApiCategoriasController extends Controller
{
   
    public function GetCategories(Request $request):JsonResponse
    {
        $categorias = Categoria::select('id','descripcion','titulo','posicion','tipo')->get();
        return response()->json(
            [
            'status'            => '200',
            'msg'               => 'Actualización Exitosa',
            'datacategorias'    => $categorias,
            ],Response::HTTP_ACCEPTED);
    }
}
