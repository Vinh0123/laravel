<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\SumController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DisplayController;



Route::get('/sum', [SumController::class, 'showForm']);
Route::post('/sum', [SumController::class, 'calculateSum']);
Route::get('/', [HelloController::class, 'hello']);
Route::get('/v', [MyController::class, 'index']);
Route::get('/vinh', [PostController::class, 'index']);
Route::resource('view', PostController::class);

Route::get('/student', [DisplayController::class, 'showForm']);
Route::post('/student', [DisplayController::class, 'display']);
