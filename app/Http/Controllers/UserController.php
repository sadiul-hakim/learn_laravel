<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{

    public function getUser(): string
    {
        return "Hakim";
    }

    public function aboutUser(string $name): string
    {
        return "About $name";
    }

    public function userPage(): View
    {
        return view("user");
    }
}
