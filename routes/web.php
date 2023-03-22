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

// Bienvenida
Route::get('/', 'App\Http\Controllers\myController@welcome')->name('welcome');

/* ------------------------------- BETSOB ------------------------------- */
// Routes - betsob
Route::get('/betsob', 'App\Http\Controllers\myController@betsob')->name('betsob');
Route::get('/gorras-soldadores', 'App\Http\Controllers\betsob@gorras')->name('gorras');
Route::get('/cofias-soldadores', 'App\Http\Controllers\betsob@cofias')->name('cofias');
// Crear gorra
Route::get('/crear', 'App\Http\Controllers\betsob@crear_gorra')->name('gorras.crear');
Route::put('/store', 'App\Http\Controllers\betsob@crear_gorra')->name('gorras.store');




// Perfectec
Route::get('/perfectec', 'App\Http\Controllers\myController@perfectec')->name('albañil');

// V&C Eventos y Nails
Route::get('/vyc-eventos-y-nails', 
	'App\Http\Controllers\myController@vyc')->name('vyc');

// Mi blog personal
Route::get('/blog', 'App\Http\Controllers\myController@myblog')->name('blog');
