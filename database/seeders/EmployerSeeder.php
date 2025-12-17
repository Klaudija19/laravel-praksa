<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employer;
use App\Models\Job;

class EmployerSeeder extends Seeder
{
    public function run(): void
    {
        $employer1 = Employer::create(['name' => 'Company A']);
        $employer2 = Employer::create(['name' => 'Company B']);

        Job::create(['title' => 'Director', 'salary' => 50000, 'employer_id' => $employer1->id]);
        Job::create(['title' => 'Programmer', 'salary' => 10000, 'employer_id' => $employer1->id]);
        Job::create(['title' => 'Teacher', 'salary' => 40000, 'employer_id' => $employer2->id]);
    }
}
