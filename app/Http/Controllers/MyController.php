<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index() {
        return view('welcome') -> with('title',"Hello!!!");
    }
}
