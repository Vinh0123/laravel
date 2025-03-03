<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class finderController extends Controller
{
    function display(){
        return view('master');
    }
    function template1(){
        return view('menu');
    }
}
