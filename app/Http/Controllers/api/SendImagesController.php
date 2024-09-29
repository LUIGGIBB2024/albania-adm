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
        
        //$request->dataimages->validate([
        //    'carpeta' => 'required|string',
        //    'imagen1' => 'required|file|mimes:jpeg,png,jpg|max:2048',
        //    'imagen2' => 'required|file|mimes:jpeg,png,jpg|max:2048',
        //]);

        // Obtener el objeto dataimages del request
        $carpeta = json_decode($request);
        

        return response()->json(
            [
            'status'    => '202vOK 1992',
            'msg'       => 'Actualización Exitosa 999',
            'carpeta'   => $carpeta,                   
            //'encuestas' => $encuestas,
            ],Response::HTTP_ACCEPTED);

        return response()->json(
            [
            'status'    => '200 OK 112',
            'msg'       => 'Actualización Exitosa 999',
            'carpeta'  => $carpeta["carpeta"],                   
            //'encuestas' => $encuestas,
            ],Response::HTTP_ACCEPTED);

        $dataimages = $request->dataimages;

    
        //$dataimages = $request["dataimages"];
       
        $imagen1    = "";
        $imagen2    = "";
       
        try 
        { 
            
            if (!is_null($request["dataimages"]))
            {
                $contador = 0; 

            

                foreach($dataimages as $item) 
                {  
                    $contador++; 

                    return response()->json(
                        [
                        'status'    => '200 OK 112',
                        'msg'       => 'Actualización Exitosa 999',
                        'contador'  => $contador,                    
                        //'encuestas' => $encuestas,
                        ],Response::HTTP_ACCEPTED);

                    $carpeta    = $item['carpeta'] ?? null;   
                    $imagen1    = $item["imagen1"] ?? null;
                    $imagen2    = $item["imagen2"] ?? null;
                    return response()->json(
                        [
                        'status'    => '200 OK 112',
                        'msg'       => 'Actualización Exitosa',
                        'contador'  => $contador,                    
                        //'encuestas' => $encuestas,
                        ],Response::HTTP_ACCEPTED);

                    $this->saveBase64Image($imagen1);
                    $this->saveBase64Image($imagen2);
                }

            }
       }catch (\Exception $ex) 
        {
        return response()->json(
            [
            'status'   => '4040404 OK',
            'msg'      => 'Error en el FOR',
            'error' => $ex->getMessage(),
            ],Response::HTTP_ACCEPTED);   
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
