<?php

namespace App\Http\Controllers;

use App\Models\JobListing;

class JobController extends Controller
{
    public function index()
    {
        $jobs = JobListing::with('employer')->get();

        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }

    public function show(JobListing $job)
    {
        return view('jobs.show', [
            'job' => $job
        ]);
    }
}
