<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GestionsectoresController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("gestion_sectores",[GestionsectoresController::class,"view"])->name('view_gestion');
Route::get("gestion_sectores_crear",[GestionsectoresController::class,"create"])->name('create_gestion_sectores');
Route::get("gestion_sectores_modificar/{id}",[GestionsectoresController::class,"update"])->name('update_gestion_sectores');
Route::get("gestion_sectores_desactivar/{id}",[GestionsectoresController::class,"desactivate"])->name('desactivate_gestion_sectores');
Route::get("gestion_sectores_activar/{id}",[GestionsectoresController::class,"activate"])->name('activate_gestion_sectores');
Route::POST("gestion_sectores_guardar",[GestionsectoresController::class,"store"])->name('store_gestion_sectores');
Route::POST("gestion_sectores_actualizar",[GestionsectoresController::class,"upload"])->name('upload_gestion_sectores');