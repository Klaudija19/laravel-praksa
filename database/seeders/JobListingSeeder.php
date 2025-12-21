<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\JobListing;
use Illuminate\Database\Seeder;

class JobListingSeeder extends Seeder
{
    public function run(): void
    {
        $employers = Employer::all();

        JobListing::factory(20)->make()->each(function ($job) use ($employers) {
            $job->employer_id = $employers->random()->id;
            $job->save();
        });
    }
}
