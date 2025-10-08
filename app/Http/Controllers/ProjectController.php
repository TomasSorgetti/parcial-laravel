<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Workbench;
use App\Models\Board;

class ProjectController extends Controller
{
    /**
     * Muestra los proyectos asociados a un workbench.
     *
     * @param  int  $id ID del workbench
     * @return \Illuminate\View\View
     */
    public function projectsByWorkbench($id)
    {
        $workbench = Workbench::with('projects')->findOrFail($id);

        $projects = $workbench->projects;

        return view('user.projects', compact('workbench', 'projects'));
    }

    /**
     * Muestra los detalles de un proyecto.
     *
     * @param  int  $id ID del proyecto
     * @return \Illuminate\View\View
     */
    public function projectView($id)
    {
        $project = Project::with('boards', 'users')->findOrFail($id);

        $integrants_count = $project->users()->count();

        return view('user.project', compact('project', 'integrants_count'));
    }

    /**
     * Muestra el formulario para crear un proyecto.
     *
     * @return \Illuminate\View\View
     */
    public function addProjectView()
    {
        return view('user.add-new-project');
    }

    /**
     * Crea un nuevo proyecto.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
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

        $project = Project::create([
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
            Board::create([
                'project_id' => $project->id,
                'name' => $boardName,
            ]);
        }

        return redirect()->route('projects.by.workbench', ['id' => $workbench->id])
            ->with('success', 'Proyecto creado correctamente');
    }

    /**
     * Muestra el formulario para editar un proyecto.
     *
     * @param  int  $id ID del proyecto
     * @return \Illuminate\View\View
     */
    public function editProjectView($id)
    {
        $project = Project::findOrFail($id);

        return view('user.edit-project', compact('project'));
    }

    /**
     * Actualiza los datos de un proyecto.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id ID del proyecto
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateProject(Request $request, $id)
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

        $project = Project::findOrFail($id);

        $project->update([
            'name' => $request->name,
            'description' => $request->description,
            'address' => $request->address,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        return redirect()->route('projects.by.workbench', ['id' => $project->workbench_id])
            ->with('success', 'Proyecto actualizado correctamente');
    }
}
