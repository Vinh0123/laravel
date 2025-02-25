<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function show() {
        return view('roomForm');
    }
    public function getData(Request $request) {
        $roomData = [
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
        ];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
            $roomData['image'] = $imagePath;
        }

        session(['roomData' => $roomData]);

        return view('roomResult', compact('roomData'));
    }
}
