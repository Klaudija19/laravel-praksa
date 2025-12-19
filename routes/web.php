<?php

use Illuminate\Support\Facades\Route;
use App\Models\JobListing;

Route::get('/', function () {
    return view('home', [
        'name' => 'Klaudija'
    ]);
});

Route::get('/jobs', function () {
    $jobs = JobListing::with('employer')->get();
    return view('jobs.index', compact('jobs'));
});

Route::get('/jobs/{job}', function (JobListing $job) {
    return view('jobs.show', compact('job'));
});

Route::view('/about', 'about');
Route::view('/contact', 'contact');



