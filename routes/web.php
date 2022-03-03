<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicacionController;
use App\Http\Controllers\vistasController;


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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/ejemplo', [PublicacionController::class, 'mostrarPublicacion'])->name('ejemplo');
//Route::get('/ejemplo/{id}', [PublicacionController::class, 'verPublicacion'])->name('ver');
Route::get('/', [PublicacionController::class, 'verVista1'])->name('vista.1');
Route::get('/{slug}', [PublicacionController::class, 'tema'])->name('temas');

