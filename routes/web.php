<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('main');

Route::get('/entrar', [AuthController::class, 'loginForm'])->name('auth.loginForm');
Route::post('/entrar', [AuthController::class, 'login'])->name('auth.login');

Route::get('/registrar', [AuthController::class, 'registerForm'])->name('auth.registerForm');
Route::post('/registrar', [AuthController::class, 'register'])->name('auth.register');

Route::post('sair', [AuthController::class, 'logout'])->name('auth.logout');
