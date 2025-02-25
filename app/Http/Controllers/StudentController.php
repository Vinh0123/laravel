<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function show() {
        return view('formSV');
    }
    public function studentRequest(Request $request) {
        // dd($request->all());
        $rules = [
            'name' => 'required|min:1',
            'age' => 'required|integer|between:10,30',
            'date' => 'required|integer|',
            'phone' => 'required|digits:10',
            'address' => 'required|min:10',
        ];
        $messages = [
            'required' =>':attribute bắt buộc phải nhập',
            'min' => ':attribute phải ít nhất :min kí tự',
            'integer' => ':attribute phải là số nguyên',
            'digits' => ':attribute phải là số có 10 chữ số',
            'between' => ':attribute phải lớn hơn :min'
        ];
        $attributes = [
            'name' => 'Họ và tên',
            'age' => 'Tuổi',
            'date' => 'Ngày sinh',
            'phone' => 'Số điện thoại',
            'address' => 'Địa chỉ'
        ];
        $validator = Validator::make($request->all(), $rules,$messages, $attributes);
        if($validator->errors()->count() > 0) {
            $validator->errors()->add('error','Dữ liệu không hợp lệ');
        }
        return back()->withErrors($validator);
    }
    public function showResult(Request $request) {
        $users = [[  
            'name' => $request->name,
            'age' => $request->age,
            'date' => $request->date,
            'phone' => $request->phone,
            'address' => $request->address
        ]];
    
        return view('formSV')->with('users', $users);
    }
    
}
