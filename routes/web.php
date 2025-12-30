<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UploadProfilePicController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserFormController;
use App\Http\Middleware\LogInChecker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    $lang = $request -> query('lang');
    App::setLocale($lang);
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
// ? Route::view('/user-form', 'user-form') -> middleware([LogInChecker::class,CountryChecker::class]);
Route::post('/submit-user-data', [UserFormController::class, 'handleUserData']);

Route::view('/user/profile/view', 'profile')->name('pfl') -> middleware(LogInChecker::class);

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
    Route::get('/about/{name}', 'aboutTeacher');
});

// Global, Route, Group Middleware

Route::prefix("/course") -> controller(CourseController::class) -> group(function(){
    Route::get("/get-all","getAllCourses");
    Route::get("/get-all-expansive","getExpensiveCourses");
    Route::get("/get-all-less-seat","getLessSeatCourses");
    Route::get("/add","addCourse");
    Route::get("/update","update");
    Route::get("/delete","delete");
});

// Route::any('user',[UserController::class,'any']);
// Route::match(['put', 'post'], '/user/profile', [UserController::class,'group1']);
// Route::match(['get', 'delete'], '/user/profile', [UserController::class,'group2']);

Route::get('/print-request',[HomeController::class,'printRequest']);
Route::view('/login_page','login');
Route::post('/login',[LoginController::class,'login']);
Route::get('/logout',[LoginController::class,'logout']);

Route::view('/upload_profile_age','upload-profile');
Route::post('/upload_profile',[UploadProfilePicController::class,'uploadPic']);
