<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

/*
|--------------------------------------------------------------------------
| Static pages
|--------------------------------------------------------------------------
*/
Route::view('/', 'home', ['name' => 'Guest']);
Route::view('/contact', 'contact');

/*
|--------------------------------------------------------------------------
| Jobs (RESOURCE ROUTES)
|--------------------------------------------------------------------------
*/
Route::resource('jobs', JobController::class);



