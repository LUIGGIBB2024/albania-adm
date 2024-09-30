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
        return response()->json(
            [
              'status'   => '200k',
              'msg'      => 'Entre Aquí al inicio',
            //     'file' => $filename1,
            //     'path' =>  $path1,
            ],Response::HTTP_ACCEPTED);    

        $contador = 0;    
        
        //$request->dataimages->validate([
        //    'carpeta' => 'required|string',
        //    'imagen1' => 'required|file|mimes:jpeg,png,jpg|max:2048',
        //    'imagen2' => 'required|file|mimes:jpeg,png,jpg|max:2048',
        //]);

        // Obtener el objeto dataimages del request
        //$carpeta = json_decode($request);
        $carpeta = trim($request->carpeta);
        $cedula  = trim($request->cedula);
        try
        {
            if ($request->hasFile('imagen1')) {
                // Manejar las imágenes subidas
                $paths = [];
                if ($request->hasFile('imagen1')) {
                    $file1 = $request->file('imagen1');

                    

                 
                    $filename1 = uniqid() . '.' . $file1->getClientOriginalExtension();

                     

                    //$path1 = $file1->storeAs('mis_imagenes/' . $carpeta, $filename1, 'public');
                    $path1 = $file1->storeAs('/public/storage/encuestas/' . $cedula, $filename1, 'public');

                    // return response()->json(
                    //     [
                    //     'status'   => '555555 OK',
                    //     'msg'      => 'Error en el FOR',
                    //     'file' => $filename1,
                    //     'path' =>  $path1,
                    //     ],Response::HTTP_ACCEPTED); 
                    $paths['imagen1'] = Storage::url($path1);
                    $contador++;
                    
                }
            }
        } catch (\Exception $ex) 
            {
            return response()->json(
                [
                'status'   => '555555 OK',
                'msg'      => 'Error en el FOR',
                'error' => $ex->getMessage(),
                ],Response::HTTP_ACCEPTED);   
            }  
            

        // return response()->json(
        //     [
        //     'status'    => '202vOK 1992',
        //     'msg'       => 'Actualización Exitosa 999',
        //     'carpeta'   => $request->carpeta,                   
        //     //'encuestas' => $encuestas,
        //     ],Response::HTTP_ACCEPTED);

        // return response()->json(
        //     [
        //     'status'    => '200 OK 112',
        //     'msg'       => 'Actualización Exitosa 999',
        //     'carpeta'  => $carpeta["carpeta"],                   
        //     //'encuestas' => $encuestas,
        //     ],Response::HTTP_ACCEPTED);

        //$dataimages = $request->data;

    
        //$dataimages = $request["dataimages"];
       
        $imagen1    = "";
        $imagen2    = "";       
        

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
