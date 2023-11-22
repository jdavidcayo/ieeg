<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntradaController;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/inicio', [App\Http\Controllers\InicioController::class, 'index'])->name('inicio');
Route::resource('/entrada', App\Http\Controllers\EntradaController::class); 
Route::resource('/folleto', App\Http\Controllers\FolletoController::class); 
Route::resource('/capsula', App\Http\Controllers\CapsulaController::class);
Route::resource('/catalogo', App\Http\Controllers\CatalogoController::class);
Route::resource('/documento', App\Http\Controllers\DocumentoController::class); 
Route::resource('/manual', App\Http\Controllers\ManualController::class);
Route::resource('/formato', App\Http\Controllers\FormatoController::class);
Route::resource('/compendio',  App\Http\Controllers\CompendioController::class);
Route::resource('/usuario', App\Http\Controllers\UserController::class);

// utils
Route::get('/generarpwd', [UtilsController::class, 'generarpwd'])->name('auth.generarpwd');