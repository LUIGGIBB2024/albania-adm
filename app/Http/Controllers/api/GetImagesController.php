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
        
        $validator = $request->validate(['public/storage/encuestas/1.118.830.588-ALBADM-007' => 'required|url',]); 

        //$errorvalidator = []; 
        // if ($validator->fails()) {
        //     // Return errors or redirect back with errors
        //     $errorvalidator =  $validator->errors();
        // }
        return response()->json(
            [
            'status'    => 'OK',
            'msg'       => 'Error en el FOR',
            'error'     => $validator[0]->errors(),
            ],Response::HTTP_ACCEPTED);
    }
}
