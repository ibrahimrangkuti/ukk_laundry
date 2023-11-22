<?php

use App\Http\Controllers\PagesController;

use App\Http\Controllers\LoginController;

use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'dashboard'])->name('dashboard');

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'process'])->name('login.process');
