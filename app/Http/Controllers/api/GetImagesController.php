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
        
        //$validator = $request->validate([public_path('/storage/encuestas') => 'required|url',]); 
        $validator = public_path('storage/encuestas'); 

    
        return response()->json(
            [
            'status'    => 'OK',
            'msg'       => 'Error en el FOR',
            'error'     => $validator,
            ],Response::HTTP_ACCEPTED);
    }
}
