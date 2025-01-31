<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class GetImagesController extends Controller
{
    public function GetImagesEncuestas(Request $request):JsonResponse
    {
        $path =  storage_path('app/public/storage/encuestas/').rtrim($request->cedula)."-".rtrim($request->equipo) . "/";
        $validator = $request->validate([$path => 'validate:url',]); 
        //$validator = public_path('storage/encuestas'); 
        $existecarpeta = "No Existe Carpeta";
        if (File::exists($path)) {
           $existecarpeta = "Si Existe Carpeta";
           // Storage::makeDirectory('/path/to/create/your/directory', 0775, true); //creates directory        
        }

        // Obtiene todos los archivos en la carpeta
        $files = Storage::files($path);

        // Filtra solo las imágenes (puedes ajustar las extensiones según necesites)
        $images = array_filter($files, function ($file) {
            return in_array(pathinfo($file, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif']);
        });

        // Genera las URLs de las imágenes
        $imageUrls = array_map(function ($image) {
            return Storage::url($image);
        }, $images);
    
        return response()->json($imageUrls);
        return response()->json(
            [
            'status'        => 'OK',
            'msg'           => 'Envío Exitoso',
            'infopath'      => $path,
            'error'         => $existecarpeta,
            'rutaiamgenes'  => $imageUrls,
            ],Response::HTTP_ACCEPTED);
    }
}
