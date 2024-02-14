<?php

use App\Http\Controllers\EnderecoController;
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

Route::get('/', [EnderecoController::class, 'index']);
Route::get('/busca', [EnderecoController::class, 'busca'])->name('busca');
Route::get('/telaBuscar', [EnderecoController::class, 'telaBuscar'])->name('telaBuscar');
Route::post('/salva', [EnderecoController::class, 'salva'])->name('salva');
