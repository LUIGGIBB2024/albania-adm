<?php

namespace App\Http\Controllers\api;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\JsonResponse;

use App\Http\Controllers\Controller;
use App\Models\Beneficiario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SendBeneficiariosController extends Controller
{
    public function SendBeneficiarios(Request $request):JsonResponse
    {
        $contador = 0;
        $equipo     = $request["equipo"];
       

        //$beneficiarios = $request->databeneficiarios;
        $beneficiarios = json_decode($request->databeneficiarios);             
        

        if (isset($request->databeneficiarios))
        {
            foreach($beneficiarios as $item)
            {   
                $contador++;
                $cedula     = $item->cedula;
                DB::statement('SET FOREIGN_KEY_CHECKS=0;');
                Beneficiario::updateOrCreate(['cedula'=>$cedula,'equipo'=>$equipo],
                [
                    //"equipo"                => $equipo,
                    "tipodocumento"         => "CC",
                    "estadoidentificacion"  => "",
                    "nombres"               => $item->nombres,
                    "apellidos"             => $item->apellidos,
                    "direccion"             => $item->direccion,
                    "telefono"              => $item->telefono,
                    "email"                 => $item->email,
                    "fechadenacimiento"     => $item->fechanac,
                    "area"                  => "",
                    "sexo"                  => $item->sexo,
                    "contacto"              => "",
                    "telefonocontacto"      => "",
                    "gradodeescolaridad"    => $item->gradoescolaridad,            
                    "poblacioninmigrante"   => "",
                    "rutafotos"             => "",
                    "estado"                => "Activo",   
                    "unidadadministrativa_id"   => 0,   
                    "estrato_id"            => 0,    
                    "zona_id"               => 0,     
                    "barrio_id"             => 0,   
                    "ciudad_id"             => 0,        
                    "zona"                  => $item->zona,
                    "barrio"                => $item->barrio,
                    "sisben"                => $item->sisben,
                    "usuario_create"        => "PHOENIX24",
                    "usuario_update"        => "PHOENIX24",
                ]);       
                DB::statement('SET FOREIGN_KEY_CHECKS=1;');   
            }
        }     
    
        if ($contador > 0)
        {            
            return response()->json(
                [
                'status'   => '200 OK',
                'msg'      => 'Actualización Exitosa',
                'equipo'   => $equipo,
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
        
}
