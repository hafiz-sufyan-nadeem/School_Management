<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('home');
});

// Default page redirect to classes.index via controller
Route::get('/', function () {
    return redirect()->route('classes.index');
});

// Resource routes
Route::resource('classes', ClassController::class);
Route::resource('students', StudentController::class);

