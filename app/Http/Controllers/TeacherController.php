<?php

namespace App\Http\Controllers;


class TeacherController extends Controller
{
    public function createTeacher(): void
    {
        echo "Teacher Created";
    }

    public function getAllTeacher(): void
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

    public function deleteTeacher(): void
    {
        echo "Teacher Deleted";
    }

    public function aboutTeacher(string $name): void
    {
        echo "Teacher Deleted";
    }
}
