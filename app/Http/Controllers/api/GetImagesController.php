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
        $path =  public_path('storage/encuestas');
        $validator = $request->validate([$path => 'url',]); 
        //$validator = public_path('storage/encuestas'); 

    
        return response()->json(
            [
            'status'    => 'OK',
            'msg'       => 'Envío Exitoso',
            'error'     => $path,
            ],Response::HTTP_ACCEPTED);
    }
}
