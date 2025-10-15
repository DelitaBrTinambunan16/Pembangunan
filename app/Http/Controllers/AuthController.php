<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function index()
    {
        return view('auth.login-form');
    }

    // Memproses form login
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => ['required', 'min:3', 'regex:/[A-Z]/']
        ], [
            'username.required' => 'Username wajib diisi.',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password minimal 3 karakter.',
            'password.regex' => 'Password harus mengandung huruf kapital.'
        ]);

        $username = $request->username;
        $password = $request->password;

        // Username & password tetap
        $adminUser = 'delita24';
        $adminPass = 'Delita1234';

        if ($username === $adminUser && $password === $adminPass) {
            // Set session and regenerate to prevent fixation
            $request->session()->put('username', $username);
            $request->session()->regenerate();

            return redirect()->route('dashboard')->with('info', 'Selamat, kamu berhasil login!');
        }

        return redirect('/auth')->with('error', 'Username dan password tidak sesuai.');
    }

    // Logout method
    public function logout(Request $request)
    {
        $request->session()->flush();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('info', 'Kamu sudah logout.');
    }
}
