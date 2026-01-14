<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\JobListing;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Mail;
use App\Mail\JobPosted;


class JobController extends Controller
{
    use AuthorizesRequests;

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

    $job = JobListing::create([
        'title' => $validated['title'],
        'salary' => $validated['salary'],
        'employer_id' => $employer->id
    ]);

    // SEND EMAIL
    Mail::to(auth()->user()->email)->send(
        new JobPosted($job)
    );

    return redirect()->route('jobs.index');
}


    public function show(JobListing $job)
    {
        return view('jobs.show', compact('job'));
    }

    public function edit(JobListing $job)
    {
        $this->authorize('update', $job);
        return view('jobs.edit', compact('job'));
    }

    public function update(Request $request, JobListing $job)
    {
        $this->authorize('update', $job);

        $validated = $request->validate([
            'title' => 'required|min:3',
            'salary' => 'required',
        ]);

        $job->update($validated);

        return redirect()->route('jobs.show', $job);
    }

    public function destroy(JobListing $job)
    {
        $this->authorize('delete', $job);

        $job->delete();

        return redirect()->route('jobs.index');
    }
}











