<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;

//use Illuminate\Support\Facades\Storage;

class GetImagesController extends Controller
{
    public function GetImagesEncuestas(Request $request):JsonResponse
    {
        $path =  public_path('storage/encuestas/').rtrim($request->cedula)."-".rtrim($request->equipo);
        $validator = $request->validate([$path => 'validate:url',]); 
        //$validator = public_path('storage/encuestas'); 
        $existecarpeta = "No Existe Carpeta";
        if (Storage::exists('$path')) {
           $existecarpeta = "Si Existe Carpeta";
           // Storage::makeDirectory('/path/to/create/your/directory', 0775, true); //creates directory
        
        }
    
        return response()->json(
            [
            'status'    => 'OK',
            'msg'       => 'Envío Exitoso',
            'infopath'  => $path,
            'error'       => $existecarpeta,
            ],Response::HTTP_ACCEPTED);
    }
}
