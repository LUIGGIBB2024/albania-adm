<?php

use App\Http\Controllers\api\ApiBarriosController;
use App\Http\Controllers\api\ApiCategoriasController;
use App\Http\Controllers\api\AuthController;
use Illuminate\Http\Request;
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

Route::post('register', [AuthController::class,'register']);
Route::post('login', [AuthController::class,'login']);
Route::group(['middleware'=>['auth:sanctum']],function()
{
    // Rutas Información de Categorias
    Route::get('get-categories', [ApiCategoriasController::class,'GetCategories']);
    // Rutas Información de Barrios
    Route::get('get-barrios', [ApiBarriosController::class,'GetBarrios']);
});

