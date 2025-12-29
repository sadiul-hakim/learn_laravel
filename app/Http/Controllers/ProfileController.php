<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //

    function viewProfile(){
        // view('profile');
        // return redirect() -> to('/user/profile/home');
        // return to_route('pfl',['name'=>'Hakim']);
        return to_route('pfl');
    }
}
