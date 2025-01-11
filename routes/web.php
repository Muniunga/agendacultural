<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\GeralController;
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

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/', [GeralController::class, 'index'])->name('home');
Route::get('/admin/dashboard', [GeralController::class, 'gestao']);

Route::get('/admin/eventos', [GeralController::class, 'evento']);
Route::get('/admin/eventos/create', [EventoController::class, 'create']);
Route::post('/admin/eventos/create', [EventoController::class, 'store']);
Route::get('/admin/eventos/edit/{id}', [EventoController::class, 'edit']);
Route::post('/admin/eventos/edit/{id}', [EventoController::class, 'update']);
Route::get('/admin/eventos/delete/{id}', [EventoController::class, 'destroy']);

Route::get('/admin/categorias', [GeralController::class, 'categoria']);
Route::get('/admin/categorias/create', [CategoriaController::class, 'create']);
Route::post('/admin/categorias/create', [CategoriaController::class, 'store']);
Route::get('/admin/categorias/edit/{id}', [CategoriaController::class, 'edit']);
Route::put('/admin/categorias/edit/{id}', [CategoriaController::class, 'update']);
Route::get('/admin/categorias/delete/{id}', [CategoriaController::class, 'destroy']);
