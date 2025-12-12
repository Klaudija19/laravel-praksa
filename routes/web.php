<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    $jobs = Job::all(); // земи сите работни места од базата
    return view('home', [
        'greeting' => 'Hello',
        'name' => 'Klaudija',
        'jobs' => $jobs, // можеш да ги прикажеш и на home ако сакаш
    ]);
});

// Jobs list
Route::get('/jobs', function () {
    $jobs = Job::all();
    return view('jobs', ['jobs' => $jobs]);
});

// Job detail
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id); // Eloquent find по ID
    if (!$job) abort(404); // ако нема, врати 404
    return view('job', ['job' => $job]);
});

// About page
Route::view('/about', 'about');

// Contact page
Route::view('/contact', 'contact');



