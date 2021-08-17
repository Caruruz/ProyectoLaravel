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

Auth::routes();

Route::get('/home', [App\Http\Controllers\EmpleadoController::class, 'index'])->name('home');

Route::get('/agregar', [App\Http\Controllers\EmpleadoController::class, 'create'])->name('agregar');
Route::resource('empleados','App\Http\Controllers\EmpleadoController');

Route::get('/Carrusel', [App\Http\Controllers\CarruselController::class, 'index'])->name('Carrusel');

