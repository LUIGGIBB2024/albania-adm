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
        $path  =  'storage/encuestas/'.rtrim($request->cedula)."-".rtrim($request->equipo) . "/";

        $files = Storage::disk('public')->files($path);

        // Filtra solo las imágenes (puedes ajustar las extensiones según necesites)
        $images = array_filter($files, function ($file) {
                $extensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp'];
                $extension = pathinfo($file, PATHINFO_EXTENSION);
                return in_array(strtolower($extension), $extensions);
        });

        // Convertir las imágenes a Base64
        // $base64Images = array_map(function ($image) {
        //     $fileContent = Storage::disk('public')->get($image);
        //     $mimeType = Storage::disk('public')->mimeType($image);
        //     return 'data:' . $mimeType . ';base64,' . base64_encode($fileContent);
        // }, $images);

        // Convertir las imágenes a Base64 de forma segura
        $base64Images = [];
        foreach ($images as $image) {
            try {
                $fileContent = Storage::disk('public')->get($image);
                $mimeType = Storage::disk('public')->mimeType($image);
                $base64Images[] = 'data:' . $mimeType . ';base64,' . base64_encode($fileContent);
            } catch (\Exception $e) {
                // Manejar errores al leer o procesar la imagen
                continue;
            }
        }

        if (empty($base64Images)) {
            return response()->json([
                'status' => 'ERROR',
                'msg' => 'No se pudieron procesar las imágenes.',
                'infopath' => $path,
                'rutaimagenes' => [],
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response()->json(
            [
            'status'        => 'OK',
            'msg'           => 'Envío Exitoso',
            'infopath'      => $path,
            'rutaimagenes'  =>  $base64Images,           
           ],Response::HTTP_ACCEPTED);
    }
}
