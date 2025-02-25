<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SumController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CovidController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\StudentController;

use App\Http\Controllers\ProductController;		
Route::resource('products', ProductController::class);		



Route::get('/sum', [SumController::class, 'showForm']);
Route::post('/sum', [SumController::class, 'calculateSum']);
//
Route::resource('view', PostController::class);
//
Route::get('/welcome', [CovidController::class, 'getData']);
//
Route::get('/roomForm', [RoomController::class, 'show']);
Route::post('/roomForm', [RoomController::class, 'getData']);
//
Route::get('/student', [StudentController::class, 'show']);
Route::post('/student', [StudentController::class, 'studentRequest']);
Route::post('/student', [StudentController::class, 'showResult']);