<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class StudentController extends Controller
{
    public function createStudent(): void
    {
        echo "Student Created";
    }

    public function getAllStudent()
    {
        return Http::get('https://jsonplaceholder.typicode.com/users')->body();
    }

    public function deleteStudent(): void
    {
        echo "Student Deleted";
    }
}
