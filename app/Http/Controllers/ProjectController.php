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
        $project = \App\Models\Project::with('boards', 'users')->findOrFail($id);

        $integrants_count = $project->users()->count();

        return view('user.project', compact('project', 'integrants_count'));
    }
}
