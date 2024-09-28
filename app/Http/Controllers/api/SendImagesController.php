<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;

class SendImagesController extends Controller
{
    public function SendImagesEncuestas(Request $request):JsonResponse
    {
        $contador = 0;       
        $dataimages = ($request->dataimages);
        $imagen1    = "";
        $imagen2    = "";

        if (isset($request->dataimages))
        {
            $contador = 0; 
            foreach($dataimages as $item) 
            {  
                $contador++; 

                return response()->json(
                    [
                    'status'    => '200 OK',
                    'msg'       => 'Actualización Exitosa',
                    'data'  => $item,
                    //'imagen2'   => $imagen2,
                    //'encuestas' => $encuestas,
                    ],Response::HTTP_ACCEPTED);
                    
                $carpeta    = $item[0]["carpeta"];
                $imagen1    = $item[0]["imagen1"];
                $imagen2    = $item[0]["imagen2"];
                $this->saveBase64Image($imagen1);
                $this->saveBase64Image($imagen2);
            }

        }

        if ($contador > 0)
        {            
            return response()->json(
                [
                'status'    => '200 OK',
                'msg'       => 'Actualización Exitosa',
                'contador'  => $contador,
                'imagen2'   => $imagen2,
                //'encuestas' => $encuestas,
                ],Response::HTTP_ACCEPTED);
        } else
        {
          return response()->json(
             [
              'status'   => '200 OK',
              'msg'      => 'No hubo actualización',
               //'encuestas' => $encuestas,
             ],Response::HTTP_BAD_REQUEST); 
        }
    }

    function saveBase64Image($base64String)
    {
        // Eliminar la parte del encabezado de base64 si está presente (p.ej., "data:image/jpeg;base64,")
        if (preg_match('/^data:image\/(\w+);base64,/', $base64String, $type)) {
            $base64String = substr($base64String, strpos($base64String, ',') + 1);
            $type = strtolower($type[1]); // jpg, png, gif, etc.
        } else {
            throw new \Exception('Formato base64 inválido');
        }

        // Decodificar la cadena base64
        $decodedData = base64_decode($base64String);

        if ($decodedData === false) {
            throw new \Exception('No se pudo decodificar la imagen en base64');
        }
       
        // Crear un nombre único para la imagen
        $fileName1 = 'imagen_' . uniqid() . '.jpg';

        // Guardar la imagen en la carpeta 'mis_imagenes' en el storage
        $filePath = 'mis_imagenes/' . $fileName1;

        // Utilizar el almacenamiento local para guardar el archivo
        Storage::disk('local')->put($filePath, $decodedData);

        // Retornar la ruta del archivo guardado
        return $filePath;
    }
}
