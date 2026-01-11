<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employer;

class EmployerSeeder extends Seeder
{
    public function run(): void
    {
        Employer::insert([
            [
                'name' => 'Tech Solutions',
                'email' => 'contact@techsolutions.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Design Studio',
                'email' => 'info@designstudio.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
