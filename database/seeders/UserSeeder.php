<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Workbench;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
        ]);

        Workbench::create([
            'user_id' => $user->id,
            'name' => 'Workbench principal',
            'description' => 'Espacio de trabajo predeterminado del administrador.',
        ]);
    }
}
