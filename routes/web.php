<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\UsuariosController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    //para vistas sin controlador
    Route::view('/soporte', 'administrador.soporte')->name('soporte');
    Route::get('/usuarios',[UsuariosController::class,'index'])->name('usuarios');

    //controlador solo para prueba
    Route::view('/agregar', 'administrador.convenio.agregar')->name('agregar');
    Route::view('/reporte', 'administrador.convenio.reporte')->name('reporte');
    Route::get('/internacional',[LocationController::class,'international'])->name('internacional');
    Route::get('/internacional/{country}',[LocationController::class,'countries'])->name('internacional.pais');
    Route::get('/nacional',[LocationController::class,'national'])->name('nacional');
    Route::get('/local',[LocationController::class,'local'])->name('local');


});
