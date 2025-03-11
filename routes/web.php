<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\finderController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\objectal;
use App\Http\Controllers\createTableController;

Route::get('/AddProductal', [objectal::class,'create']);
Route::get('/Detail/{id}', [App\Http\Controllers\objectal::class,'show']);
Route::get('/UpdateProduct/{id}', [App\Http\Controllers\objectal::class,'edit']);
Route::get('/viewer',[App\Http\Controllers\finderController::class,'display']);// blade1
Route::get('/viewer',[App\Http\Controllers\PageController::class,'getIndex']);

Route::get('/s', [App\Http\Controllers\finderController::class,'template1']);// blade2
Route::get('/create-table', [createTableController::class, 'createTable']);
Route::get('/database', [createTableController::class, 'create_Table']);
Route::get('/', [PageController::class, 'Index'])->name('trang-chu');
Route::get('loai-san-pham', [PageController::class, 'getProductType'])->name('loaisanpham');
Route::get('/sanpham/{id}', [PageController::class, 'getProductDetail'])->name('chitietsanpham');  