<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\LevelController;
use \App\Http\Controllers\GroupController;
use \App\Http\Controllers\PerfilController;
use \App\Http\Controllers\LocationController;
use \App\Http\Controllers\CategoriaController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//rutas usuario
Route::get("/users",[UserController::class , 'index']);
Route::post('/users/create',[UserController::class, 'store']);
Route::get('/users/{id}',[UserController::class, 'show']);
Route::put('/users/{id}',[UserController::class, 'update']);
Route::delete('/users/{id}',[UserController::class, 'destroy']);

//rutas perfil
Route::get('/perfils',[PerfilController::class, 'index']);

//rutas locations
Route::get('/locations',[LocationController::class,'index']);

//rutas levels
Route::get('/levels',[LevelController::class,'index']);
Route::post('/levels/create',[LevelController::class, 'store']);
Route::get('/levels/{id}', [LevelController::class, 'show']);
Route::put('/levels/{id}',[LevelController::class, 'update']);
Route::delete('/levels/{id}', [LevelController::class, 'destroy']);

//rutas group
Route::get('/groups',[GroupController::class, 'index']);
Route::post('/groups/create',[GroupController::class, 'store']);
Route::get('/groups/{id}',[GroupController::class, 'show']);
Route::put('/groups/{id}',[GroupController::class, 'update']);
Route::delete('/groups/{id}',[GroupController::class, 'destroy']);


//rutas categorias
Route::get('/categorias',[CategoriaController::class, 'index']);

