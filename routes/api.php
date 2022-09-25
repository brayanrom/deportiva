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


Route::get('actividades/{id?}',[App\Http\Controllers\ActividadesController::class,'get'])->name('actividades.get');
Route::post('actividades',[App\Http\Controllers\ActividadesController::class,'insert'])->name('actividades.insert');
Route::put('actividades/{id}',[App\Http\Controllers\ActividadesController::class,'update'])->name('actividades.update');
Route::delete('actividades/{id}',[App\Http\Controllers\ActividadesController::class,'delete'])->name('actividades.delete');


Route::get('membresias/{id?}',[App\Http\Controllers\MembresiasController::class,'get'])->name('membresias.get');
Route::post('membresias',[App\Http\Controllers\MembresiasController::class,'insert'])->name('membresias.insert');
Route::put('membresias/{id}',[App\Http\Controllers\MembresiasController::class,'update'])->name('membresias.update');
Route::delete('membresias/{id}',[App\Http\Controllers\MembresiasController::class,'delete'])->name('membresias.delete');



Route::get('localidades/{id?}',[App\Http\Controllers\LocalidadesController::class,'get'])->name('localidades.get');
Route::post('localidades',[App\Http\Controllers\LocalidadesController::class,'insert'])->name('localidades.insert');
Route::put('localidades/{id}',[App\Http\Controllers\LocalidadesController::class,'update'])->name('localidades.update');
Route::delete('localidades/{id}',[App\Http\Controllers\LocalidadesController::class,'delete'])->name('localidades.delete');


// pendiente(grupos de familias por misma id/folio)
// Route::get('familias/{id?}',[App\Http\Controllers\FamiliasController::class,'get'])->name('familias.get');
// Route::post('familias',[App\Http\Controllers\FamiliasController::class,'insert'])->name('familias.get');
// Route::put('familias/{id}',[App\Http\Controllers\FamiliasController::class,'update'])->name('familias.get');
// Route::delete('familias/{id}',[App\Http\Controllers\FamiliasController::class,'delete'])->name('familias.get');







//parte visual pruebas
Route::get('visual', function () {
    return view("Actividades.get",
    ['name' => 'James',
    'descripcion'=>'Descipcion'
    ]
);
});
