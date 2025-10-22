<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\LokasiProyekController;

Route::get('/', function () {
    return redirect('/auth');
});

Route::get('/auth', [AuthController::class, 'index'])->name('login');
Route::post('/auth/login', [AuthController::class, 'login'])->name('auth.login');

// Logout
Route::post('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');

// Dashboard route (protected by web middleware by default)
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

// Debug route to inspect session/cookie (local only)
Route::get('/debug-session', function (Illuminate\Http\Request $request) {
    if (app()->environment() !== 'local') {
        abort(403);
    }
    return [
        'has_session' => $request->session()->all(),
        'cookies' => $request->cookies->all(),
        'headers' => $request->headers->all(),
    ];
});

// Show CSRF token + session token for debugging (local only)
Route::get('/show-csrf', function (Illuminate\Http\Request $request) {
    if (app()->environment() !== 'local') {
        abort(403);
    }

    return [
        'csrf_token()' => csrf_token(),
        "session__token" => $request->session()->get('_token'),
        'session_id' => $request->session()->getId(),
        'cookies' => $request->cookies->all(),
    ];
});

// Biar gak error kalau buka /auth/login langsung lewat URL
Route::get('/auth/login', function () {
    return redirect('/auth');
});

// Resource routes for CRUD


Route::resource('warga', WargaController::class);
Route::resource('lokasi-proyek', LokasiProyekController::class);


