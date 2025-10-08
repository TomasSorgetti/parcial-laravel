<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    /**
     * Muestra el formulario de login.
     *
     * @return \Illuminate\View\View
     */
    public function showLogin()
    {
        return view('auth.login');
    }

    /**
     * Procesa el login.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
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

    /**
     * Muestra el register.
     *
     * @return \Illuminate\View\View
     */
    public function showRegister()
    {
        return view('auth.register');
    }

    /**
     * Procesa el registro.
     *
     * @return void
     */
    public function register()
    {
        // todo
    }

    /**
     * Cierra la sesión.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('auth.login');
    }
}
