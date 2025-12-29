<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFormController extends Controller
{
    //

    public function handleUserData(Request $request):Request{
        $request -> validate([
            'name'=>'required | min:3 | max:20',
            'email'=>'required | email',
            'password'=>'required',
            'date_of_birth'=>'required',
        ],[
            'name.required' => 'User Name is required'
        ]);
        return $request;
    }
}
