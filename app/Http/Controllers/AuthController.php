<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);
        $request->validate([
            'password' => 'required',
        ]);

        $request->validate([
            'email' => 'exists:users',
        ]);

        $credentiasls = $request->only('email', 'password');

        if (Auth::attempt($credentiasls)) {
            return to_route('welcome')
                ->with('success', 'Logueado con éxito');
        }

        return back(fallback: route('auth.login'))
            ->withInput()
            ->with('login.error', 'Credenciales incorrectas.');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register() {}

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('auth.login');
    }
}
