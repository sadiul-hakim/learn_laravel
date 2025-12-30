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

    public function getExpensiveCourses(){
        return DB::table("courses")
        ->where('price','>=','3000')
        ->get()
        ;
    }

    public function getLessSeatCourses(){
        return Course::where('seat','<=','150') -> get();
    }

    public function addCourse(){
        $res = DB::table("courses") -> insert([
            'name'=>'Unknown',
            'seat'=>0,
            'price'=>0
        ]);

        if($res){
            return redirect('/course/get-all?age=21');
        }
    }

    public function addCourse2(){
        $res = Course::insert([
            'name'=>'Unknown',
            'seat'=>0,
            'price'=>0
        ]);

        if($res){
            return redirect('/course/get-all?age=21');
        }
    }

    public function update(){
        $res = DB::table("courses") -> where('name','Unknown')->update(
            [
                'price'=>1000
            ]
        );

        if($res == true){
            return redirect('/course/get-all?age=21');
        }
    }

    public function update2(){
        $res = Course::where('name','Unknown')->update(
            [
                'price'=>1000
            ]
        );

        if($res == true){
            return redirect('/course/get-all?age=21');
        }
    }

    public function delete(){
        $res = DB::table("courses") -> where('name','Unknown')->delete();

        if($res == true){
            return redirect('/course/get-all?age=21');
        }
    }

    public function delete2(){
        $res = Course::where('name','Unknown')->delete();

        if($res == true){
            return redirect('/course/get-all?age=21');
        }
    }
}
