<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntradaController;


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
    return view('auth.login');
});

Auth::routes();

Route::get('/folleto', [App\Http\Controllers\FolletoController::class, 'index'])->name('folleto.index'); //Creado por problemas con folleto, averiguar
Route::get('/capsula', [App\Http\Controllers\CapsulaController::class, 'index'])->name('capsula.index'); //Creado por problemas con folleto, averiguar
// Route::resource('/folletos', App\Http\Controllers\FolletosController::class);
// Route::resource('/capsulas', App\Http\Controllers\CapsulasController::class); 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/inicio', [App\Http\Controllers\InicioController::class, 'index'])->name('inicio');
Route::resource('/documentos', App\Http\Controllers\DocumentosController::class); 
Route::resource('/manuales', App\Http\Controllers\ManualesController::class);
Route::resource('/formatos', App\Http\Controllers\FormatosController::class);
Route::resource('/catalogos', App\Http\Controllers\CatalogosController::class);
Route::resource('/compendios',  App\Http\Controllers\CompendiosController::class);
