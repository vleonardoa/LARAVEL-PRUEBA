<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\clienteController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\SocioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::resource('producto', ProductoController::class);

Route::resource('usuario', UsuarioController::class);

Route::resource('cliente', clienteController::class);

Route::resource('contacto', ContactoController::class);

Route::resource('socio', SocioController::class);

