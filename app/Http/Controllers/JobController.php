<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use App\Models\Employer;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Show all job listings
     */
    public function index()
    {
        $jobs = JobListing::with('employer')
            ->latest()
            ->paginate(5);

        return view('jobs.index', compact('jobs'));
    }

    /**
     * Show form for creating a job
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a new job
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'  => 'required|min:3',
            'salary' => 'required'
        ]);

        $employer = Employer::first();

        JobListing::create([
            'title'       => $validated['title'],
            'salary'      => $validated['salary'],
            'employer_id' => $employer->id
        ]);

        return redirect()->route('jobs.index');
    }

    /**
     * Show single job
     */
    public function show(JobListing $job)
    {
        return view('jobs.show', compact('job'));
    }

    /**
     * Show edit form
     */
    public function edit(JobListing $job)
    {
        return view('jobs.edit', compact('job'));
    }

    /**
     * Update job
     */
    public function update(Request $request, JobListing $job)
    {
        $validated = $request->validate([
            'title'  => 'required|min:3',
            'salary' => 'required'
        ]);

        $job->update($validated);

        return redirect()->route('jobs.show', $job);
    }

    /**
     * Delete job
     */
    public function destroy(JobListing $job)
    {
        $job->delete();

        return redirect()->route('jobs.index');
    }
}






