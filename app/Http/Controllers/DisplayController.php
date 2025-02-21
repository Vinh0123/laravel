<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests\StudentInfomationRequest;

class DisplayController extends Controller
{
   public function showForm() {
     return view('formSV');
   }
    public function display(StudentInfomationRequest $request) {
      $validated = $request->validated();

      return view('formSV', [
          'name' => $validated['name'],
          'age' => $validated['age'],
          'date' => $validated['date'],
          'phone' => $validated['phone'],
          'address' => $validated['address'],
      ]);
   }
   
}
