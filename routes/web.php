<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

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

Route::get("/aluno", [AlunoController::class, "index"]);
Route::Post("/aluno", [AlunoController::class, "salvar"]);
Route::get("/aluno/excluir/{id}", [AlunoController::class, "excluir"]);
Route::get("/aluno/editar/{id}", [AlunoController::class, "editar"]);