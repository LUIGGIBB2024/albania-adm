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
        $existecarpeta = "No Existe Carpeta";
        if (File::exists($path)) {
           $existecarpeta = "Si Existe Carpeta";            
        }

        // Obtiene todos los archivos en la carpeta
        //$files = Storage::files($path);
        $files = Storage::disk('public')->files($path);

        if (count($files) > 0)
        {
            return response()->json(
                [
                'status'        => 'OK200',
                'msg'           => 'Envío Exitoso',
                'infopath'      => $path,
                //'error'         => $existecarpeta,
                'cuantos'  =>count($files),           
               ],Response::HTTP_ACCEPTED);

        }

        // Filtra solo las imágenes (puedes ajustar las extensiones según necesites)
        $images = array_filter($files, function ($file) {
            return in_array(pathinfo($file, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif']);
        });

        // Genera las URLs de las imágenes
        $imageUrls = array_map(function ($image) {
            return Storage::url($image);
        }, $images);

        //return response()->json($imageUrls);
        return response()->json(
            [
            'status'        => 'OK',
            'msg'           => 'Envío Exitoso',
            'infopath'      => $path,
            'error'         => $existecarpeta,
            'rutaiamgenes'  => $files,           
           ],Response::HTTP_ACCEPTED);
    }
}
