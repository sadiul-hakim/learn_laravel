<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserFormController;
use App\Http\Middleware\LogInChecker;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about-me/{text}', function (string $text) {
    return view('about', ['text' => $text]);
});

Route::get('/about/{text}', [UserController::class, 'aboutUser']); // text is automatically passed to controller

Route::redirect('/home', '/');

// ? Route::view("/contact-us","contact_up");

// ! Apply middleware separately
// Route::get('/user', [UserController::class, 'getUser'])->middleware("user_middleware");
// Route::get('/user-page', [UserController::class, 'userPage'])->middleware("user_middleware");

// ? or make group

Route::middleware("user_middleware")->group(function () {
    Route::get('/user', [UserController::class, 'getUser']);
    Route::get('/user-page', [UserController::class, 'userPage']);
});

// ? For templates under nested folder use '.', Like admin/admin.blade.php -> admin.admin

// Directly apply middleware here, no need to append inside app.php
Route::view('/user-form', 'user-form') -> middleware(LogInChecker::class);
Route::post('/submit-user-data', [UserFormController::class, 'handleUserData']);

Route::view('/user/profile/view', 'profile')->name('pfl');

// Grouping app students endpoints
Route::prefix('/student')->group(function () {
    Route::post('/create', [StudentController::class, 'createStudent']);
    Route::get('/get-all', [StudentController::class, 'getAllStudent']);
    Route::delete('/delete', [StudentController::class, 'deleteStudent']);
});

Route::view('/blocked', 'blocked');

// Route Grouping with Controller
Route::prefix("/teacher")->controller(TeacherController::class)->group(function () {
    Route::post('/create', 'createTeacher');
    Route::get('/get-all', 'getAllTeacher');
    Route::delete('/delete', 'deleteTeacher');
    Route::delete('/about/{name}', 'aboutTeacher');
});

// Global, Route, Group Middleware
