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
        $categorias = Categoria::select('id','descripcion','titulo','posicion','proyecto','tipo')->get();
        return response()->json(
            [
<<<<<<< HEAD
            'status'            => '200',           
=======
            'status'            => '200',
>>>>>>> f402e1ea2b781bade9e423b0d5a524a4246e5872
            'msg'               => 'Actualización Exitosa',
            'datacategorias'    => $categorias,
            ],Response::HTTP_ACCEPTED);
    }
}
