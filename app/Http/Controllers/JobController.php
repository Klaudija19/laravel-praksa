<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use App\Models\Employer;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the jobs.
     */
    public function index()
    {
        $jobs = JobListing::with('employer')
            ->latest()
            ->paginate(5);

        return view('jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new job.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created job in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:3',
            'salary' => 'required'
        ]);

        
        $employer = Employer::where('user_id', auth()->id())->first();

        // ако не постои → креирај
        if (!$employer) {
            $employer = Employer::create([
                'name' => auth()->user()->name . ' Employer',
                'user_id' => auth()->id(),
            ]);
        }

        JobListing::create([
            'title' => $validated['title'],
            'salary' => $validated['salary'],
            'employer_id' => $employer->id,
        ]);

        return redirect()->route('jobs.index');
    }

    /**
     * Display the specified job.
     */
    public function show(JobListing $job)
    {
        return view('jobs.show', compact('job'));
    }

    /**
     * Show the form for editing the specified job.
     */
    public function edit(JobListing $job)
    {
        return view('jobs.edit', compact('job'));
    }

    /**
     * Update the specified job in storage.
     */
    public function update(Request $request, JobListing $job)
    {
        $validated = $request->validate([
            'title' => 'required|min:3',
            'salary' => 'required'
        ]);

        $job->update($validated);

        return redirect()->route('jobs.show', $job);
    }

    /**
     * Remove the specified job from storage.
     */
    public function destroy(JobListing $job)
    {
        $job->delete();

        return redirect()->route('jobs.index');
    }
}






