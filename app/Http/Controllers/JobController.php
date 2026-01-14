<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use App\Models\Employer;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = JobListing::with('employer')->latest()->paginate(5);
        return view('jobs.index', compact('jobs'));
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:3',
            'salary' => 'required'
        ]);

        $employer = Employer::where('user_id', auth()->id())->first();

        if (!$employer) {
            abort(403, 'No employer linked to this user.');
        }

        JobListing::create([
            'title' => $validated['title'],
            'salary' => $validated['salary'],
            'employer_id' => $employer->id
        ]);

        return redirect()->route('jobs.index');
    }

    public function show(JobListing $job)
    {
        return view('jobs.show', compact('job'));
    }

    public function edit(JobListing $job)
    {
        if ($job->employer->user_id !== auth()->id()) {
            abort(403);
        }

        return view('jobs.edit', compact('job'));
    }

    public function update(Request $request, JobListing $job)
    {
        if ($job->employer->user_id !== auth()->id()) {
            abort(403);
        }

        $validated = $request->validate([
            'title' => 'required|min:3',
            'salary' => 'required'
        ]);

        $job->update($validated);

        return redirect()->route('jobs.show', $job);
    }

    public function destroy(JobListing $job)
    {
        if ($job->employer->user_id !== auth()->id()) {
            abort(403);
        }

        $job->delete();

        return redirect()->route('jobs.index');
    }
}







