<?php

use App\Http\Controllers\TarefaController;
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

Route::get('/', [TarefaController::class,'index'])->name('painel.index');
Route::get('/novo', [TarefaController::class,'novo'])->name('painel.novo');
Route::post('/novo', [TarefaController::class,'salvar'])->name('painel.salvar');

Route::get('/editar/{id}', [TarefaController::class,'editar'])->name('painel.editar.form');
Route::post('/editar/{id}', [TarefaController::class,'editarAction'])->name('painel.editar.salvar');

Route::get('/deletar/{id}', [TarefaController::class,'deletar'])->name('painel.apagar');
