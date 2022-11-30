<?php
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('estados', App\Http\Controllers\EstadoController::class);
Route::resource('municipios',App\Http\Controllers\MunicipioController::class);
Route::resource('personas', App\Http\Controllers\PersonaController::class);
Route::resource('familias', App\Http\Controllers\FamiliasController::class);
Route::resource('tipospagos', App\Http\Controllers\TipoPagoController::class);
Route::resource('actividad', App\Http\Controllers\ActividadController::class);
Route::resource('tipospagos', App\Http\Controllers\TipoPagoController::class);
Route::resource('fecha', App\Http\Controllers\FechaController::class);


Route::get('/',[App\Http\Controllers\PrincipalController::class,'menu']);
Route::get('/registro', [App\Http\Controllers\RegistroController::class,'insert']);
