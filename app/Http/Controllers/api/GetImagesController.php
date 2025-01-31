<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;

class GetImagesController extends Controller
{
    public function GSendImagesEncuestasImagesEncuestas(Request $request):JsonResponse
    {
         
        return response()->json(
            [
            'status'   => '555555 OK',
            'msg'      => 'Error en el FOR',
            //'error' => $ex->getMessage(),
            ],Response::HTTP_ACCEPTED);
    }
}
