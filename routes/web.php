<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserFormController;

Route::get("/", function () {
    return view("home");
});

Route::get("/about-me/{text}", function (string $text) {
    return view("about", ['text' => $text]);
});

Route::get("/about/{text}", [UserController::class, 'aboutUser']); // text is automatically passed to controller

Route::redirect("/home", "/");

// Route::view("/contact-us","contact_up");

Route::get("/user", [UserController::class, 'getUser']);
Route::get("/user-page", [UserController::class, 'userPage']);

// For templates under nested folder use '.', Like admin/admin.blade.php -> admin.admin

Route::view("/user-form", "user-form");
Route::post("/submit-user-data", [UserFormController::class, 'handleUserData']);

Route::view("/user/profile/view", "profile")->name('pfl');

// Grouping app students endpoints
Route::prefix("/student")->group(function () {
    Route::post('/create', [StudentController::class, 'createStudent']);
    Route::get('/get-all', [StudentController::class, 'getAllStudent']);
    Route::delete('/delete', [StudentController::class, 'deleteStudent']);
});
