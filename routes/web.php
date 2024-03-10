<?php

// Importing necessary controller classes and the Route facade
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MyJobApplicationController;
use App\Http\Controllers\MyJobController;
use Illuminate\Support\Facades\Route;

// Route to redirect to the jobs index page
Route::get('', fn() => to_route('jobs.index'));

// Resource routes for jobs, only allowing index and show actions
Route::resource('jobs', JobController::class)
    ->only(['index', 'show']);

// Route for user login
Route::get('login', fn() => to_route('auth.create'))->name('login');

// Resource routes for user authentication, only allowing create and store actions
Route::resource('auth', AuthController::class)
    ->only(['create', 'store']);

// Route for user logout
Route::delete('logout', fn() => to_route('auth.destroy'))->name('logout');

// Route for deleting user authentication
Route::delete('auth', [AuthController::class, 'destroy'])
    ->name('auth.destroy');

// Grouping routes under 'auth' middleware, ensuring authentication is required
Route::middleware('auth')->group(function () {
    // Resource routes for job applications, only allowing create and store actions
    Route::resource('job.application', JobApplicationController::class)
        ->only(['create', 'store']);

    // Resource routes for user's job applications, only allowing index and destroy actions
    Route::resource('my-job-applications', MyJobApplicationController::class)
        ->only(['index', 'destroy']);

    // Resource routes for employers, only allowing create and store actions
    Route::resource('employer', EmployerController::class)
        ->only(['create', 'store']);

    // Grouping routes under 'employer' middleware, ensuring user is an employer
    Route::middleware('employer')
        ->resource('my-jobs', MyJobController::class);
});
