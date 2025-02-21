<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CovidController extends Controller
{
    public function getData()
    {
        // Gửi yêu cầu GET đến API
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        
        // Chuyển dữ liệu nhận được về dạng mảng (json -> array)
        $data = $response->json();

        // Trả về view 'index' với dữ liệu
        return view('welcome')->with('data', $data);
    }
}