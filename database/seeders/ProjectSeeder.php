<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Workbench;
use App\Models\User;
use App\Models\Board;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $workbench = Workbench::first();
        $user = User::first();

        if ($workbench && $user) {
            $project = Project::create([
                'workbench_id' => $workbench->id,
                'name' => 'Proyecto Alfa',
                'description' => 'Primer proyecto de prueba',
                'address' => 'Calle Falsa 123, Ciudad',
                'latitude' => -34.6037,
                'longitude' => -58.3816,
                'status' => 'activo',
                'start_date' => now(),
                'end_date' => now()->addMonth(),
            ]);

            $project->users()->attach($user->id, ['role' => 'gerente']);

            $defaultBoards = ['Por Hacer', 'En Proceso', 'Finalizado'];
            foreach ($defaultBoards as $boardName) {
                Board::create([
                    'project_id' => $project->id,
                    'name' => $boardName,
                ]);
            }
        }
    }
}
