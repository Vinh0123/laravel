<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function calculateSum(Request $request)
    {
        $a = $request->input('a', 0);
        $b = $request->input('b', 0);
        $sum = $a + $b;

        return view('form', compact('a', 'b', 'sum'));
    }
}
