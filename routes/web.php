<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Auth;
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






// rutas del Login 
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Ruta para mostrar todos los registros
Route::get('/cliente', [ClientController::class , 'index' ]   )->middleware('auth')->name('cliente.index');

// Ruta para mostrar el formulario de creación
Route::get('/cliente/create',[ClientController::class , 'create'])->middleware('auth')->name('cliente.create');

// Ruta para almacenar el nuevo registro creado
Route::post('/cliente', [ClientController::class , 'store'  ] )->name('cliente.store');
// Ruta para mostrar un registro específico
Route::get('/cliente/{item}', 'ItemController@show')->middleware('auth')->name('cliente.show');

// Ruta para mostrar el formulario de edición de un registro
Route::get('/cliente/{item}/edit', [ClientController::class , 'edit'])->middleware('auth')->name('cliente.edit');

// Ruta para actualizar un registro específico
Route::put('/cliente/{item}', [ClientController::class , 'update'])->name('cliente.update');
// Ruta para eliminar un registro específico
Route::delete('/cliente/{item}',[ClientController::class  , 'destroy'] )->name('cliente.delete');

