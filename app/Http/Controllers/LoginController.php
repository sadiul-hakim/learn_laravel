<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    function login(Request $request){
        $email = $request->email;
        $password = $request->password;
        $request -> session() -> put('user',['email'=>$email]);
        return to_route('pfl');
    }

    function logout(Request $request){
        $request -> session() -> put('user');
        return redirect('/login_page');
    }
}
