<?php

use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\SitioController;
use Illuminate\Support\Facades\Route;

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

Route::get('/test', function () {
    return view('landing');
})->middleware('auth');

//Agregando ? podemos hacer que acepte ciertos casos
//En este caso administrador y cliente

Route::get('/inicio/{tipo?}', [SitioController::class , 'in']);

Route::resource('comentario', ComentarioController::class);

Route::resource('productos', ProductosController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/x/y/demo', function () {
    return view('landing');
})->name('landing');
