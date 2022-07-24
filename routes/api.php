<?php

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ColegioController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(UsuarioController::class)->group(function(){
    Route::get('/usuarios','index');
    Route::post('/usuario','store');
    Route::get('/usuario/{id}','show');
    Route::put('/usuario/{id}','update');
    Route::delete('/usuario/{id}/destroy','destroy');
    Route::post('/login','login');
});

Route::controller(ColegioController::class)->group(function(){
    Route::get('/colegios','index');
    Route::post('/colegio','store');
    Route::get('/colegio/{id}','show');
    Route::put('/colegio/{id}','update');
    Route::delete('/colegio/{id}/destroy','destroy');
});

Route::middleware('auth:sanctum')->group(function(){
    Route::post('/logout',[UsuarioController::class,'logout']);
});
