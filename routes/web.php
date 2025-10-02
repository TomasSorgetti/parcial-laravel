<?php

use Illuminate\Support\Facades\Route;

// public routes
Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])
    ->name('home');
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'blog'])
    ->name('blog');

// todo => create controllers
// auth routes
Route::get('/iniciar-session', function () {
    return view('auth/login');
})
    ->name('iniciar-session');

Route::get('/registrarse', function () {
    return view('auth/register');
})
    ->name('registrarse');

// user routes
Route::get('/bienvenida', function () {
    return view('user/welcome');
});
Route::get('/cuenta/perfil', function () {
    return view('user/account/profile');
});
Route::get('/cuenta/config', function () {
    return view('user/account/settings');
});

// admin routes
Route::get('/admin', function () {
    return view('admin/dashboard');
});
