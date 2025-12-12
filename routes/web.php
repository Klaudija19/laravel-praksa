<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home Page
Route::get('/', function () {
    return view('home', [
        'greeting' => 'Hello',
        'name' => 'Klaudija',
    ]);
});

// About Page
Route::get('/about', function () {
    return view('about'); // resources/views/about.blade.php
});

// Contact Page
Route::get('/contact', function () {
    return view('contact'); // resources/views/contact.blade.php
});

// Jobs List Page
Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            ['id' => 1, 'title' => 'Director', 'salary' => 50000],
            ['id' => 2, 'title' => 'Programmer', 'salary' => 10000],
            ['id' => 3, 'title' => 'Teacher', 'salary' => 40000],
        ],
    ]);
});

// Job Detail Page
Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        ['id' => 1, 'title' => 'Director', 'salary' => 50000],
        ['id' => 2, 'title' => 'Programmer', 'salary' => 10000],
        ['id' => 3, 'title' => 'Teacher', 'salary' => 40000],
    ];

    $job = collect($jobs)->first(fn($job) => $job['id'] == $id);

    if (!$job) {
        abort(404);
    }

    return view('job', ['job' => $job]);
});
