<?php

namespace App\Http\Controllers;

use App\Models\JobListing;

class JobController extends Controller
{
    public function index()
    {
        $jobs = JobListing::with('employer')->paginate(3);

        return view('jobs.index', compact('jobs'));
    }
}
