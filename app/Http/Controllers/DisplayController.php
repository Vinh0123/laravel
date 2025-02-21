<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests\StudentInfomationRequest;

class DisplayController extends Controller
{
   public function showForm() {
     return view('formSV');
   }
   public function display(Request $request) {
    $userSession = session('userSession',[]);
    $user = [
        'name' => $request->input('name'),
        'age' => $request->input('age'),
        'date' => $request->input('date'),
        'phone' => $request->input('phone'),
        'address' => $request->input('address'),
    ];
    $userSession = $user;
    session(['userSession' => $userSession]);
    return view('formSV')->with('userSession', $userSession);
}   
}
