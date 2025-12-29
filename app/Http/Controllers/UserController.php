<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View as FacadesView;
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

    public function userPage():View
    {
        if(FacadesView::exists("user")){
            return view("user");
        } else{
            return view("home");
        }
    }
}
