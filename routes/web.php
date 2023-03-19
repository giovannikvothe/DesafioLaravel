<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\EmailController;
use Illuminate\Http\Request;


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

// Funcionarios

Route::get('/funcionarios', [FuncionarioController::class, 'index'])->name('funcionarios.index');

Route::middleware('CheckPerm')->group(function () {
Route::get('/funcionarios/create', [FuncionarioController::class, 'create'])->name('funcionarios.create');
Route::get('/funcionarios/{funcionario}/edit', [FuncionarioController::class, 'edit'])->name('funcionarios.edit');
Route::get('/funcionarios/{funcionario}', [FuncionarioController::class, 'show'])->name('funcionarios.show');
Route::post('/funcionarios', [FuncionarioController::class, 'store'])->name('funcionarios.store');
Route::post('/funcionarios/edit/{funcionario}', [FuncionarioController::class, 'update'])->name('funcionarios.update');
Route::post('/funcionarios/delete/{funcionario}', [FuncionarioController::class, 'destroy'])->name('funcionarios.destroy');
});

// Alunos

Route::get('/alunos', [AlunoController::class, 'index'])->name('alunos.index');

Route::middleware('CheckPerm')->group(function () {
Route::get('/alunos/create', [AlunoController::class, 'create'])->name('alunos.create');
Route::get('/alunos/{aluno}/edit', [AlunoController::class, 'edit'])->name('alunos.edit');
Route::get('/alunos/{aluno}', [AlunoController::class, 'show'])->name('alunos.show');
Route::post('/alunos', [AlunoController::class, 'store'])->name('alunos.store');
Route::post('/alunos/edit/{aluno}', [AlunoController::class, 'update'])->name('alunos.update');
Route::post('/alunos/delete/{aluno}', [AlunoController::class, 'destroy'])->name('aluno.destroy');
});

// Aulas

Route::get('/aulas', [AulaController::class, 'index'])->name('aulas.index');

Route::middleware('CheckPerm')->group(function () {
Route::get('/aulas/create', [AulaController::class, 'create'])->name('aulas.create');
Route::post('/aulas', [AulaController::class, 'store'])->name('aulas.store');
Route::get('/aulas/{aula}', [AulaController::class, 'show'])->name('aulas.show');
Route::get('/aulas/{aula}/edit', [AulaController::class, 'edit'])->name('aulas.edit');
Route::post('/aulas/edit/{aula}', [AlaController::class, 'update'])->name('aulas.update');
Route::post('/aulas/delete/{aula}', [AulaController::class, 'destroy'])->name('aluno.destroy');
});

// Email

Route::middleware('CheckPerm')->group(function () {
Route::get('/email', [EmailController::class, 'create'])->name('mail.create');
Route::post('/email/send', [EmailController::class, 'send'])->name('mail.send');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
