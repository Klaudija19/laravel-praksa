<?php
use App\Models\JobListing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/jobs', function () {
    $jobs = JobListing::with('employer')->paginate(3);
    return view('jobs.index', compact('jobs'));
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::post('/jobs', function (Request $request) {
    JobListing::create([
        'title' => $request->input('title'),
        'salary' => $request->input('salary'),
        'employer_id' => 1, // засега фиксен employer
    ]);

    return redirect('/jobs');
});

Route::get('/jobs/{id}', function ($id) {
    $job = JobListing::with('employer')->findOrFail($id);
    return view('jobs.show', compact('job'));
});



