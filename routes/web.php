<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('main');

Route::get('/respostas/{id}', [MainController::class, 'show'])->name('question.show');

Route::get('/perguntar', [MainController::class, 'create'])->name('question.create');
Route::post('/perguntar', [MainController::class, 'store'])->name('question.store');
Route::get('/minhas-perguntas', [MainController::class, 'myQuestions'])->name('question.my');

Route::post('/responder', [AnswerController::class, 'store'])->name('answer.store');

Route::get('/entrar', [AuthController::class, 'loginForm'])->name('auth.loginForm');
Route::post('/entrar', [AuthController::class, 'login'])->name('auth.login');

Route::get('/registrar', [AuthController::class, 'registerForm'])->name('auth.registerForm');
Route::post('/registrar', [AuthController::class, 'register'])->name('auth.register');

Route::post('sair', [AuthController::class, 'logout'])->name('auth.logout');
