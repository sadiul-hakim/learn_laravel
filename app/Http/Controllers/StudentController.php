<?php

namespace App\Http\Controllers;

class StudentController extends Controller
{
    public function createStudent(): void
    {
        echo "Student Created";
    }

    public function getAllStudent(): void
    {
        print_r([
            [
                'name' => 'Hakim',
                'age' => 21
            ],
            [
                'name' => 'Ashik',
                'age' => 31
            ]
        ]);
    }

    public function deleteStudent(): void
    {
        echo "Student Deleted";
    }
}
