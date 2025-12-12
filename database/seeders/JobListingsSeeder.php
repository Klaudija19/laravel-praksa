<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;

class JobListingsSeeder extends Seeder
{
    public function run(): void
    {
        Job::insert([
            ['title' => 'Director', 'salary' => 50000],
            ['title' => 'Programmer', 'salary' => 10000],
            ['title' => 'Teacher', 'salary' => 40000],
        ]);
    }
}



