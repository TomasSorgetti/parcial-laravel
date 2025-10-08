<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workbench;

class WorkbenchController extends Controller
{
    public function welcome()
    {
        $user = auth()->user();

        if (!$user) {
            abort(403, 'No autorizado');
        }

        // Trae los workbenchs con la cantidad de proyectos
        $workbenches = $user->workbenches()->withCount('projects')->get();

        return view('user.welcome', compact('workbenches'));
    }
}
