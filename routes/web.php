<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

/*
|--------------------------------------------------------------------------
| Public pages
|--------------------------------------------------------------------------
*/

Route::view('/', 'home')->name('home');
Route::view('/contact', 'contact')->name('contact');

/*
|--------------------------------------------------------------------------
| Dashboard (FIX за login error)
|--------------------------------------------------------------------------
*/

Route::view('/dashboard', 'dashboard')
    ->middleware('auth')
    ->name('dashboard');

/*
|--------------------------------------------------------------------------
| Jobs (CRUD)
|--------------------------------------------------------------------------
*/

Route::controller(JobController::class)->group(function () {
    Route::get('/jobs', 'index')->name('jobs.index');
    Route::get('/jobs/create', 'create')->middleware('auth')->name('jobs.create');
    Route::post('/jobs', 'store')->middleware('auth')->name('jobs.store');
    Route::get('/jobs/{job}', 'show')->name('jobs.show');
    Route::get('/jobs/{job}/edit', 'edit')->middleware('auth')->name('jobs.edit');
    Route::patch('/jobs/{job}', 'update')->middleware('auth')->name('jobs.update');
    Route::delete('/jobs/{job}', 'destroy')->middleware('auth')->name('jobs.destroy');
});

/*
|--------------------------------------------------------------------------
| Auth routes (login, register, logout)
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';





