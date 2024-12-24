<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Tampilkan halaman register
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function showLoginForm()
    {
        return view('auth.login'); // Pastikan view auth/login.blade.php ada
    }

    // Proses registrasi
    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed', // Gunakan confirmed untuk mencocokkan dengan password_confirmation
        ]);

        // Simpan pengguna ke database
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash password
        ]);

        // Redirect ke halaman login setelah registrasi berhasil
        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Proses login
        if (Auth::attempt($request->only('email', 'password'))) {
            // Redirect ke halaman home setelah login berhasil
            return redirect()->route('home');
        }

        // Jika gagal login, kembalikan ke halaman login dengan pesan error
        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }
}
