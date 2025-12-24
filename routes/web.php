<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

/*
|--------------------------------------------------------------------------
| Public pages
|--------------------------------------------------------------------------
*/

Route::view('/', 'home');
Route::view('/contact', 'contact');

/*
|--------------------------------------------------------------------------
| Jobs (CRUD)
|--------------------------------------------------------------------------
*/

Route::controller(JobController::class)->group(function () {
    Route::get('/jobs', 'index');
    Route::get('/jobs/create', 'create')->middleware('auth');
    Route::post('/jobs', 'store')->middleware('auth');
    Route::get('/jobs/{job}', 'show');
    Route::get('/jobs/{job}/edit', 'edit')->middleware('auth');
    Route::patch('/jobs/{job}', 'update')->middleware('auth');
    Route::delete('/jobs/{job}', 'destroy')->middleware('auth');
});

/*
|--------------------------------------------------------------------------
| Breeze auth routes
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';


