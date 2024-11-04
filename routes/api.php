<?php

use App\Http\Controllers\api\ApiBarriosController;
use App\Http\Controllers\api\ApiCategoriasController;
use App\Http\Controllers\api\ApiPlantillasController;
use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\GetBeneficiariosController;
use App\Http\Controllers\api\GetDetalleDeEncuestas;
use App\Http\Controllers\api\GetDetalleDeEncuestasController;
use App\Http\Controllers\api\GetEncuestas;
use App\Http\Controllers\api\SendBeneficiariosController;
use App\Http\Controllers\api\SendDetalleEncuestasController;
use App\Http\Controllers\api\SendEncuestasController;
use App\Http\Controllers\api\SendImagesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('test', function () {
    return "Hola Estoy Aqui 200";
});

Route::get('/generate-link-symbolic', function () {
    if (file_exists(public_path("storage"))) {
        return "Carpeta Existente";
    }

    try {
        Artisan::call("storage:link");
        app('files')->link(storage_path('app/public'), public_path('storage'));
        return "Proceso exitoso de creación de Storage";
    } catch (\Exception $e) {
        return "Error al crear el enlace simbólico: " . $e->getMessage();
    }
});


Route::post('register', [AuthController::class,'register']);
Route::post('login', [AuthController::class,'login']);
Route::group(['middleware'=>['auth:sanctum']],function()
{
    // Rutas Información de Categorias
    Route::get('get-categories', [ApiCategoriasController::class,'GetCategories']);
    // Rutas Información de Barrios
    Route::get('get-barrios', [ApiBarriosController::class,'GetBarrios']);
    // Rutas Información de plantillass
    Route::get('get-templates', [ApiPlantillasController::class,'GetTemplates']);

    ////////////////////////////////////////////////////////////////////////////////
    // Ruta Actualizar Información de los beneficiarios al Servidor (Escritorio)    
    Route::get('get-beneficiarios', [GetBeneficiariosController::class,'GetBeneficiarios']);

    Route::get('get-encuestas', [GetEncuestas::class,'GetEncuestas']);

    // Ruta Actualizar Información de Detalle de Encuestas
    Route::post('get-detalle-encuestas', [GetDetalleDeEncuestasController::class,'GetDetalleDeEncuestas']);

    // Ruta Contar Registro de Detalle de Encuestas
    Route::get('get-count-detalles', [GetDetalleDeEncuestasController::class,'GetCountDetalles']);
    /////////////////////////////////////////////////////////////////////////////////
    // Rutas Información de Encuestas
    Route::get('send-encuestas', [SendEncuestasController::class,'SendEncuestas']);

    // Rutas Información de Beneficiarios
    Route::get('send-beneficiarios', [SendBeneficiariosController::class,'SendBeneficiarios']);
    
    // Rutas Información de Detalle de Encuestas
    Route::get('send-detalle-encuestas', [SendDetalleEncuestasController::class,'SendDetalleEncuestas']);

    // Rutas Información de Imágenes
    Route::post('send-images-encuestas', [SendImagesController::class,'SendImagesEncuestas']);
});

