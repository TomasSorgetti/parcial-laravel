<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/ping', function () {
    return "pong";
});
Route::get('/hello', [\App\Http\Controllers\ExampleController::class, "holamundo"]);
