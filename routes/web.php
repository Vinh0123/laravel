<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\finderController;
use App\Http\Controllers\objectal;
Route::get('/', [Objectal::class,'index']);
Route::get('/AddProductal', [objectal::class,'create']);
Route::get('/Detail/{id}', [App\Http\Controllers\objectal::class,'show']);
Route::get('/UpdateProduct/{id}', [App\Http\Controllers\objectal::class,'edit']);
Route::get('/viewer',[App\Http\Controllers\finderController::class,'display']);// blade1
Route::get('/s', [App\Http\Controllers\finderController::class,'template1']);// blade2
