<?php

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
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //para vistas sin controlador
    Route::view('/soporte', 'administrador.soporte')->name('soporte');
    Route::get('/usuarios',[UsuariosController::class,'index'])->name('usuarios');

    //controlador solo para prueba
    Route::view('/agregar', 'administrador.convenio.agregar')->name('agregar');
    Route::view('/reporte', 'administrador.convenio.reporte')->name('reporte');
    Route::view('/internacional', 'administrador.filtro.internacional')->name('internacional');
    Route::view('/nacional', 'administrador.filtro.nacional')->name('nacional');
    Route::view('/local', 'administrador.filtro.local')->name('local');


});
