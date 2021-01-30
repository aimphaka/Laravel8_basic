<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function showHello($name){
        return '<h1>Hello :'.$name.'</h1>';
    }

    function showresultProduct($product){
        return '<h1>Show :'.$product.'</h1>';
    }

    function show(){
        return view('create.users')
        ->with('name','Aim')
        ->with('title','Laravel tutorial');
    }
}
