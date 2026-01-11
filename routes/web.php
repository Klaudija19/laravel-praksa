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
| Jobs (CRUD)
|--------------------------------------------------------------------------
*/
Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');

Route::middleware('auth')->group(function () {
    Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
    Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');

    Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->name('jobs.edit');
    Route::patch('/jobs/{job}', [JobController::class, 'update'])->name('jobs.update');
    Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->name('jobs.destroy');
});

Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');


/*
|--------------------------------------------------------------------------
| Auth routes (Breeze / manual)
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';










