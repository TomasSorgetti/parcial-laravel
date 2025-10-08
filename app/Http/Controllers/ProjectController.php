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

    public function addProjectView()
    {
        return view('user.add-new-project');
    }

    public function createNewProject(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'nullable|string|max:255',
            'latitude' => 'nullable|numeric|between:-90,90',
            'longitude' => 'nullable|numeric|between:-180,180',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
        ]);

        //? user type error???
        $user = auth()->user();
        $workbench = $user->workbenches()->first();

        if (!$workbench) {
            return redirect()->back()->with('error', 'No tienes workbench para asignar el proyecto.');
        }

        $project = \App\Models\Project::create([
            'workbench_id' => $workbench->id,
            'name' => $request->name,
            'description' => $request->description,
            'address' => $request->address,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'status' => 'activo',
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        $project->users()->attach($user->id, ['role' => 'gerente']);

        $defaultBoards = ['Por Hacer', 'En Proceso', 'Finalizado'];
        foreach ($defaultBoards as $boardName) {
            \App\Models\Board::create([
                'project_id' => $project->id,
                'name' => $boardName,
            ]);
        }

        return redirect()->route('projects.by.workbench', ['id' => $workbench->id])
            ->with('success', 'Proyecto creado correctamente');
    }
}
