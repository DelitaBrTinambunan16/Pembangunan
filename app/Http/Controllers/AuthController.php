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
            return view('auth.success', ['username' => $username]);
        } else {
            return redirect('/auth')->with('error', 'Username dan password tidak sesuai.');
        }
    }
}
