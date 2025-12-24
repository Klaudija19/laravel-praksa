<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = JobListing::with('employer')->paginate(5);
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
        $request->validate([
            'title' => 'required|min:3',
            'salary' => 'required|numeric',
        ]);

        JobListing::create([
            'title' => $request->title,
            'salary' => $request->salary,
            'employer_id' => null,
        ]);

        return redirect('/jobs');
    }

    public function edit(JobListing $job)
    {
        return view('jobs.edit', compact('job'));
    }

    public function update(Request $request, JobListing $job)
    {
        $request->validate([
            'title' => 'required|min:3',
            'salary' => 'required|numeric',
        ]);

        $job->update($request->only('title', 'salary'));

        return redirect("/jobs/{$job->id}");
    }

    public function destroy(JobListing $job)
    {
        $job->delete();
        return redirect('/jobs');
    }
}

