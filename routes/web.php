<?php
use App\Models\JobListing;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    return view('home', ['name' => 'Klaudija']);
});

// Jobs list (PAGINATION)
Route::get('/jobs', function () {
    $jobs = JobListing::with('employer')->paginate(3); 
    return view('jobs.index', ['jobs' => $jobs]);
});

// Job detail
Route::get('/jobs/{id}', function ($id) {
    $job = JobListing::with('employer')->findOrFail($id);
    return view('jobs.show', ['job' => $job]);
});

// Static pages
Route::view('/about', 'about');
Route::view('/contact', 'contact');


