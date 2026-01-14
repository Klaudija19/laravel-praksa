<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\User;
use Illuminate\Database\Seeder;

class EmployerSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first(); 

        Employer::create([
            'name' => 'Default Employer',
            'user_id' => $user->id,
        ]);
    }
}

