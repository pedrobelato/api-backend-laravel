<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function(){
    Route::get('/produtos', [ProductController::class, 'Listar']);
    Route::post('/produtos', [ProductController::class, 'Gravar']);
    Route::put('/produtos/{id}', [ProductController::class, 'Editar']);
    Route::delete('/produtos/{id}', [ProductController::class, 'Excluir']);
});

Route::post('/login', [AuthController::class, 'login']);