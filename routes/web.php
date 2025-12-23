<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\JobListing;

/*
|--------------------------------------------------------------------------
| Static pages
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('home', ['name' => 'Guest']);
});

Route::get('/contact', function () {
    return view('contact');
});

/*
|--------------------------------------------------------------------------
| Jobs
|--------------------------------------------------------------------------
*/
Route::get('/jobs', function () {
    $jobs = JobListing::with('employer')->paginate(5);
    return view('jobs.index', compact('jobs'));
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::post('/jobs', function (Request $request) {
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
});

Route::get('/jobs/{id}', function ($id) {
    $job = JobListing::with('employer')->findOrFail($id);
    return view('jobs.show', compact('job'));
});

Route::get('/jobs/{id}/edit', function ($id) {
    $job = JobListing::findOrFail($id);
    return view('jobs.edit', compact('job'));
});

Route::patch('/jobs/{id}', function (Request $request, $id) {
    $request->validate([
        'title' => 'required|min:3',
        'salary' => 'required|numeric',
    ]);

    $job = JobListing::findOrFail($id);
    $job->update($request->only('title', 'salary'));

    return redirect("/jobs/$id");
});

Route::delete('/jobs/{id}', function ($id) {
    JobListing::findOrFail($id)->delete();
    return redirect('/jobs');
});


