<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HomeController;

// Home Page
Route::get('/', [HomeController::class, 'index']);

// Resource routes
Route::resource('classes', ClassController::class);
Route::resource('students', StudentController::class);

