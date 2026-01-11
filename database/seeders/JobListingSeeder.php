<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JobListing;

class JobListingSeeder extends Seeder
{
    public function run(): void
    {
        JobListing::create([
            'title' => 'Junior Web Developer',
            'salary' => 600,
            'employer_id' => 1,
        ]);

        JobListing::create([
            'title' => 'Backend Developer',
            'salary' => 1200,
            'employer_id' => 1,
        ]);

        JobListing::create([
            'title' => 'UI/UX Designer',
            'salary' => 900,
            'employer_id' => 1,
        ]);
    }
}


