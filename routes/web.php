<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return redirect('/auth');
});

Route::get('/auth', [AuthController::class, 'index'])->name('login');
Route::post('/auth/login', [AuthController::class, 'login'])->name('auth.login');

// Biar gak error kalau buka /auth/login langsung lewat URL
Route::get('/auth/login', function () {
    return redirect('/auth');
});


