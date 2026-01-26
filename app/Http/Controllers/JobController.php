<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Jobs\SendJobPostedEmail;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class JobController extends Controller
{
    use AuthorizesRequests;

    // LIST JOBS + PAGINATION
    public function index()
    {
        $jobs = JobListing::with('employer.user')
            ->latest()
            ->paginate(5);

        return view('jobs.index', compact('jobs'));
    }

    // SHOW CREATE FORM
    public function create()
    {
        return view('jobs.create');
    }

    // STORE NEW JOB + QUEUE EMAIL
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'salary' => 'required|numeric|min:0',
            'company' => 'required|string|max:255',
        ]);

        $employer = Auth::user()->employer;

        if (!$employer) {
            abort(403, 'No employer account found.');
        }

        $job = JobListing::create([
            'title' => $validated['title'],
            'salary' => $validated['salary'],
            'company' => $validated['company'],
            'employer_id' => $employer->id,
        ]);

        // SEND EMAIL IN BACKGROUND (QUEUE)
        SendJobPostedEmail::dispatch($job, Auth::user()->email);

        return redirect()->route('jobs.index')
            ->with('success', 'Job created successfully!');
    }

    // SHOW SINGLE JOB
    public function show(JobListing $job)
    {
        return view('jobs.show', compact('job'));
    }

    // EDIT FORM (AUTHORIZED)
    public function edit(JobListing $job)
    {
        $this->authorize('update', $job);
        return view('jobs.edit', compact('job'));
    }

    // UPDATE JOB
    public function update(Request $request, JobListing $job)
    {
        $this->authorize('update', $job);

        $validated = $request->validate([
            'title' => 'required|min:3',
            'salary' => 'required|numeric|min:0',
            'company' => 'required|string|max:255',
        ]);

        $job->update($validated);

        return redirect()->route('jobs.show', $job)
            ->with('success', 'Job updated successfully!');
    }

    // DELETE JOB
    public function destroy(JobListing $job)
    {
        $this->authorize('delete', $job);

        $job->delete();

        return redirect()->route('jobs.index')
            ->with('success', 'Job deleted successfully!');
    }
}














