<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadProfilePicController extends Controller
{
    //

    public function uploadPic(Request $request){
        $path = $request -> file('file') -> store('uploads', 'public');
        // $path = $request -> file('file') -> storeAs('uploads','dump.png', 'public');
        $fileName = explode('/',$path)[1];
        return view('profile',['file'=>$fileName]);
    }
}
