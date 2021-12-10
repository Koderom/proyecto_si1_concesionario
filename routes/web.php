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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('clientes', 'App\Http\Controllers\ClienteController');
Route::resource('categorias', 'App\Http\Controllers\CategoriaController');
Route::resource('marcas', 'App\Http\Controllers\MarcaController');
Route::resource('vehiculos', 'App\Http\Controllers\VehiculoController');
Route::resource('usuarios','App\Http\Controllers\UsuarioController' );
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
