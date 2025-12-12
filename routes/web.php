<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', function () {
    return view('home', ['greeting' => 'Hello', 'name' => 'Klaudija']);
});

// Jobs list
Route::get('/jobs', function () {
    $jobs = Job::all();
    return view('jobs', ['jobs' => $jobs]);
});

// Job detail
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    if (!$job) abort(404);
    return view('job', ['job' => $job]);
});

// About & Contact pages
Route::view('/about', 'about');
Route::view('/contact', 'contact');



