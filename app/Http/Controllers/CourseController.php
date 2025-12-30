<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CourseController extends Controller
{
    public function getAllCourses(): View
    {
        // $courses = DB::select("SELECT * from courses");
        $courses = Course::all();
        return view('course', ['courses' => $courses]);
    }
}
