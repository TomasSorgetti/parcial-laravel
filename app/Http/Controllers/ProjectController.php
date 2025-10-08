<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function projectsByWorkbench($id)
    {
        $workbench = \App\Models\Workbench::with('projects')->findOrFail($id);

        $projects = $workbench->projects;

        return view('user.projects', compact('workbench', 'projects'));
    }

    public function projectView($id)
    {
        
        return view('user.project');
    }
}
