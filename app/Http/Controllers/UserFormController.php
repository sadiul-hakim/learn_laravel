<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class UserFormController extends Controller
{
    //

    public function handleUserData(Request $request){
        $request -> session() -> flash('message','user form is submitted successfully');
        $request -> validate([
            'name'=>'required | min:3 | max:20 | uppercase',
            'email'=>'required | email',
            'password'=>'required',
            'date_of_birth'=>'required',
        ],[
            'name.required' => 'User Name is required'
        ]);
        return redirect('/user-form');
        // return view('user-form');

    }
}
