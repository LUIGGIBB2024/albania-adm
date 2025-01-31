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

        // Obtiene todos los archivos de la carpeta
        $files = Storage::disk('public')->files($path);

        // Filtrar solo archivos de imagen
        $images = array_filter($files, function ($file) {
            $extensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp'];
            $extension = pathinfo($file, PATHINFO_EXTENSION);
            return in_array(strtolower($extension), $extensions);
        });

        // Generar URLs públicas para las imágenes
        $imageUrls = array_map(function ($image) {
            return  $path . $image;
        }, $images);

        return response()->json([
            'images' => $imageUrls,
        ]);
    
        //return response()->json($imageUrls);
        // return response()->json(
        //     [
        //     'status'        => 'OK',
        //     'msg'           => 'Envío Exitoso',
        //     'infopath'      => $path,
        //     'error'         => $existecarpeta,
        //     'rutaiamgenes'  => $imageUrls,
        //     'cuantos'       => $images->count(),
        //    ],Response::HTTP_ACCEPTED);
    }
}
