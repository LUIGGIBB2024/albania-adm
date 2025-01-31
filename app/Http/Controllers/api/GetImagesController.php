<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\JsonResponse;
//use Illuminate\Support\Facades\Storage;

class GetImagesController extends Controller
{
    public function GetImagesEncuestas(Request $request):JsonResponse
    {
        
        $validator = $request->validate(['app/public/encuestas' => 'required|url',]); 

    
        return response()->json(
            [
            'status'    => 'OK',
            'msg'       => 'Error en el FOR',
            //'error'     => $errorvalidator,
            ],Response::HTTP_ACCEPTED);
    }
}
