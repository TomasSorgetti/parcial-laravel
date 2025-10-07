<?php

use Illuminate\Support\Facades\Route;

// public routes
Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])
    ->name('home');
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'blog'])
    ->name('blog')
    ->middleware('auth');

// auth routes
Route::get('/iniciar-session', [App\Http\Controllers\AuthController::class, 'showLogin'])
    ->name('auth.login');

Route::post('/iniciar-session', [App\Http\Controllers\AuthController::class, 'login'])
    ->name('auth.login.login');

Route::get('/registrarse', [App\Http\Controllers\AuthController::class, 'showRegister'])
    ->name('auth.register');

Route::post('/cerrar-sesion', [App\Http\Controllers\AuthController::class, 'logout'])
    ->name('auth.logout');

// todo => create controllers
// user routes
Route::get('/bienvenida', function () {
    return view('user/welcome');
})
    ->name('welcome')
    ->middleware('auth');

Route::get('/cuenta/perfil', function () {
    return view('user/account/profile');
})
    ->name('profile')
    ->middleware('auth');

Route::get('/cuenta/config', function () {
    return view('user/account/settings');
})
    ->name('settings')
    ->middleware('auth');

// admin routes
Route::get('/admin', function () {
    return view('admin/dashboard');
})
    ->name('admin')
    ->middleware('auth');
