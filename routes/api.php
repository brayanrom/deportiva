<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication;
use Illuminate\Support\Facades\Auth;



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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('actividades/{id?}',[App\Http\Controllers\ActividadesController::class,'get']);
Route::post('actividades',[App\Http\Controllers\ActividadesController::class,'insert']);
Route::put('actividades/{id}',[App\Http\Controllers\ActividadesController::class,'update']);
Route::delete('actividades/{id}',[App\Http\Controllers\ActividadesController::class,'delete']);


Route::get('membresias/{id?}',[App\Http\Controllers\MembresiasController::class,'get']);
Route::post('membresias',[App\Http\Controllers\MembresiasController::class,'insert']);
Route::put('membresias/{id}',[App\Http\Controllers\MembresiasController::class,'update']);
Route::delete('membresias/{id}',[App\Http\Controllers\MembresiasController::class,'delete']);



Route::get('localidades/{id?}',[App\Http\Controllers\LocalidadesController::class,'get']);
Route::post('localidades',[App\Http\Controllers\LocalidadesController::class,'insert']);
Route::put('localidades/{id}',[App\Http\Controllers\LocalidadesController::class,'update']);
Route::delete('localidades/{id}',[App\Http\Controllers\LocalidadesController::class,'delete']);


// pendiente(grupos de familias por misma id/folio)
// Route::get('familias/{id?}',[App\Http\Controllers\FamiliasController::class,'get']);
// Route::post('familias',[App\Http\Controllers\FamiliasController::class,'insert']);
// Route::put('familias/{id}',[App\Http\Controllers\FamiliasController::class,'update']);
// Route::delete('familias/{id}',[App\Http\Controllers\FamiliasController::class,'delete']);


