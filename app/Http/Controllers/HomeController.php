<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    function printRequest(Request $request):void{
        // echo "<pre>";
        // print_r($request -> attributes);
        // print_r($request -> cookies);
        // print_r($request -> files);
        // print_r($request -> headers);
        // print_r($request -> query);
        // print_r($request -> request);
        // print_r($request -> server);
        // echo "</pre>";
        echo $request->method()."<br/>";
        echo $request->path()."<br/>";
        echo $request->uri()."<br/>";
        // echo $request->input('name')."<br/>";
        // echo $request->name."<br/>";
        // print_r($request->input());
        // print_r($request->collect());
        echo $request->isMethod('get')."<br/>";
        echo $request->is('/print-request')."<br/>";
        echo $request->ip()."<br/>";
    }
}
