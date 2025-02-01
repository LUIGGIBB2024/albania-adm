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

        //return response()->json($imageUrls);
        return response()->json(
            [
            'status'        => 'OK',
            'msg'           => 'Envío Exitoso',
            'infopath'      => $path,
            'rutaiamgenes'  => $images,           
           ],Response::HTTP_ACCEPTED);
    }
}
