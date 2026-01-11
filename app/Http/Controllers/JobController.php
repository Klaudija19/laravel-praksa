<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = JobListing::latest()->paginate(5);

        return view('jobs.index', compact('jobs'));
    }

    public function show(JobListing $job)
    {
        return view('jobs.show', compact('job'));
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

        JobListing::create($validated);

        return redirect()->route('jobs.index');
    }

    public function edit(JobListing $job)
    {
        return view('jobs.edit', compact('job'));
    }

    public function update(Request $request, JobListing $job)
    {
        $validated = $request->validate([
            'title' => 'required|min:3',
            'salary' => 'required'
        ]);

        $job->update($validated);

        return redirect()->route('jobs.index');
    }

    public function destroy(JobListing $job)
    {
        $job->delete();

        return redirect()->route('jobs.index');
    }
}




