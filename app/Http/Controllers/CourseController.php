<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function getAllCourses() : array{
        return DB::select("SELECT * from course");
    }
}
