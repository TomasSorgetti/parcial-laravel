<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workbench;

class WorkbenchController extends Controller
{
    /**
     * Muestra la página de bienvenida con los workbenches del usuario.
     *
     * @return \Illuminate\View\View
     */
    public function welcome()
    {
        //? ver typados
        $user = auth()->user();

        if (!$user) {
            abort(403, 'No autorizado');
        }

        $workbenches = $user->workbenches()->withCount('projects')->get();

        return view('user.welcome', compact('workbenches'));
    }

    /**
     * Muestra el formulario para crear un workbench.
     *
     * @return \Illuminate\View\View
     */
    public function addWorkbenchView()
    {
        return view('user.add-new-workbench');
    }

    /**
     * Crea un nuevo workbench.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addNewWorkbench(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $workbench = Workbench::create([
            //? id error, check types?
            'user_id' => auth()->id(),
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('welcome')->with('success', 'Workbench creado correctamente.');
    }

    /**
     * Muestra el formulario para editar un workbench.
     *
     * @param  int  $id ID del workbench
     * @return \Illuminate\View\View
     */
    public function editWorkbenchView($id)
    {
        $workbench = Workbench::findOrFail($id);

        return view('user.edit-workbench', compact('workbench'));
    }

    /**
     * Actualiza un workbench.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id ID del workbench
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateWorkbench(Request $request, $id)
    {
        $workbench = Workbench::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $workbench->update($validated);

        return redirect()->route('welcome')->with('success', 'Workbench actualizado correctamente');
    }
}
