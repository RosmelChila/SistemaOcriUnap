<?php

use App\Http\Controllers\AgregarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ReporteController;
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
    return view('usuario/index');
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
    Route::get('/agregar', [AgregarController::class,'index'])->name('agregar');
    Route::get('/reporte',[ReporteController::class,'reporte'])->name('reporte');
    Route::get('/reportes',[ReporteController::class,'consulta'])->name('consultar');
    Route::get('/internacional',[LocationController::class,'international'])->name('internacional');
    Route::get('/internacional/{pais}',[LocationController::class,'countries'])->name('internacional.pais');

    Route::get('/nacional',[LocationController::class,'national'])->name('nacional');
    Route::get('/nacional/{region}',[LocationController::class,'regions'])->name('nacional.region');

    Route::get('/local',[LocationController::class,'local'])->name('local');
    Route::get('/local/{province}',[LocationController::class,'provinces'])->name('local.province');
    //para ver convenios edicion
    Route::view('/editar', 'administrador.convenio.editar')->name('editar');
    Route::get('/ver/{id}',[ReporteController::class,'ver'])->name('ver.id');

    //agregar etiquetas
    Route::get('/etiquetas', App\Http\Livewire\Datos\Etiquetas::class)->name("etiquetas");  // crear

    //ruta redireccion para el busacador
    Route::get('/resultados',[ReporteController::class,'search'])->name('buscar');

});
