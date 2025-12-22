<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\JobListing;

/*
|--------------------------------------------------------------------------
| Pages
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home', [
        'name' => 'Klaudija'
    ]);
});

Route::view('/contact', 'contact');

/*
|--------------------------------------------------------------------------
| Jobs
|--------------------------------------------------------------------------
*/

Route::get('/jobs', function () {
    $jobs = JobListing::with('employer')->paginate(5);

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

/* CREATE FORM – мора да е пред {id} */
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

/* STORE */
Route::post('/jobs', function (Request $request) {

    $validated = $request->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required', 'numeric'],
    ]);

    JobListing::create([
        'title' => $validated['title'],
        'salary' => $validated['salary'],
        'employer_id' => 1, // засега фиксно
    ]);

    return redirect('/jobs');
});

/* SHOW */
Route::get('/jobs/{job}', function (JobListing $job) {
    return view('jobs.show', [
        'job' => $job->load('employer')
    ]);
});



