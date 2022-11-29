<?php
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::middleware(['auth'])->group(function () {
Route::resource('estados', App\Http\Controllers\EstadoController::class);
Route::resource('municipios',App\Http\Controllers\MunicipioController::class);
Route::resource('personas', App\Http\Controllers\PersonaController::class);
Route::resource('familias', App\Http\Controllers\FamiliasController::class);
Route::resource('tipospagos', App\Http\Controllers\TipoPagoController::class);
Route::resource('actividad', App\Http\Controllers\ActividadController::class);
Route::resource('fecha', App\Http\Controllers\FechaController::class);
Route::get('/',[App\Http\Controllers\PrincipalController::class,'menu']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
