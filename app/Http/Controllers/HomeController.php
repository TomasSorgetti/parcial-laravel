<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Muestra la vista de inicio.
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        return view('home');
    }
}
