<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\JobListing;
use Illuminate\Database\Seeder;

class JobListingSeeder extends Seeder
{
    public function run(): void
    {
        $employer = Employer::first();

        JobListing::create([
            'title' => 'Junior Web Developer',
            'salary' => 600,
            'employer_id' => $employer->id,
        ]);

        JobListing::create([
            'title' => 'Backend Developer',
            'salary' => 900,
            'employer_id' => $employer->id,
        ]);

        JobListing::create([
            'title' => 'Frontend Developer',
            'salary' => 800,
            'employer_id' => $employer->id,
        ]);
    }
}



