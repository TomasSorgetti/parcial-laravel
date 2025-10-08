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

        $workbenches = $user->workbenches()->withCount('projects')->get();

        return view('user.welcome', compact('workbenches'));
    }

    public function addWorkbenchView()
    {
        return view('user.add-new-workbench');
    }

    public function addNewWorkbench(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $workbench = Workbench::create([
            //? id error, chec types?
            'user_id' => auth()->id(),
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('welcome')->with('success', 'Workbench creado correctamente.');
    }

    public function editWorkbenchView($id)
    {
        $workbench = Workbench::findOrFail($id);

        return view('user.edit-workbench', compact('workbench'));
    }

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
