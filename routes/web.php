<?php
use App\Http\Controllers\myController;
use App\Http\Controllers\betsob;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Urbine
|--------------------------------------------------------------------------
*/


// Bienvenida
Route::get('/', [myController::class, 'welcome'])->name('welcome');

// Perfectec
Route::get('/perfectec', [myController::class, 'perfectec'])->name('albañil');

// Routes - betsob
Route::get('/betsob', [myController::class, 'betsob'])->name('betsob');
Route::get('/gorras-soldadores', [betsob::class, 'gorras'])->name('gorras');
Route::get('/cofias-soldadores', [betsob::class, 'cofias'])->name('cofias');
Route::get('/formulario-betsob', [betsob::class, 'formulario'])->name('formulario-betsob');
Route::post('/formulario-betsob', [betsob::class, 'store'])->name('gorra.cargar_gorra');
Route::get('/editar-gorra/{id}', [betsob::class, 'editar'])->name('gorra.editar');
Route::put('/editar-gorra/{id}', [betsob::class, 'update'])->name('gorra.actualizar');
Route::delete('/eliminar-gorra/{id}', [betsob::class, 'eliminar'])->name('gorra.eliminar');
/* Crear gorra --> Route::get('/crear', [betsob::class, 'crear_gorra'])->name('gorras.crear');Route::put('/store', [betsob::class, 'crear_gorra'])->name('gorras.store');*/

// V&C Eventos y Nails
Route::get('/vyc-eventos-y-nails', [myController::class, 'vyc'])->name('vyc');

// Mi blog personal
Route::get('/blog', [myController::class, 'myblog'])->name('blog');
Route::post('/blog', [myController::class, 'myblog_crear'])->name('consulta.realizar_consulta');
Route::get('/blog-consultas', [myController::class, 'myblog_consultas'])->name('blog_consultas');
