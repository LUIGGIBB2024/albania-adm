<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;

class GetImagesController extends Controller
{
    public function GetImagesEncuestas(Request $request):JsonResponse
    {
        $request->validate([
            'public/storage/encuestas/1.118.830.588-ALBADM-007' => 'required|url',
        ]); 

        return response()->json(
            [
            'status'   => '555555 OK',
            'msg'      => 'Error en el FOR',
            //'error' => $ex->getMessage(),
            ],Response::HTTP_ACCEPTED);
    }
}
