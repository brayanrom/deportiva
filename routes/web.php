<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('estados', App\Http\Controllers\EstadoController::class);
Route::resource('municipios',App\Http\Controllers\MunicipioController::class);
Route::resource('personas', App\Http\Controllers\PersonaController::class);
Route::resource('familias', App\Http\Controllers\FamiliasController::class);
Route::resource('tipospagos', App\Http\Controllers\TipoPagoController::class);
Route::resource('actividades', App\Http\Controllers\ActividadController::class);


Route::get('/',[App\Http\Controllers\PrincipalController::class,'menu']);
