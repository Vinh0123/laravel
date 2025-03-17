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
Route::get('loai-san-pham/{id}', [PageController::class, 'getProductType'])->name('loaisanpham');
Route::get('/sanpham/{id}', [PageController::class, 'getProductDetail'])->name('chitietsanpham');  
Route::get('/admin', [PageController::class, 'getIndexAdmin']);											
Route::get('/admin-add-form', [PageController::class, 'getAdminAdd'])->name('add-product');															
Route::post('/admin-add-form', [PageController::class, 'postAdminAdd']);											
Route::get('/admin-edit-form/{id}', [PageController::class, 'getAdminEdit']);
Route::get('/admin-edit', [PageController::class, 'postAdminEdit']);
Route::post('/admin-delete/{id}', [PageController::class, 'postAdminDelete']);
Route::get('/aboutus', [PageController::class, 'getAboutUs'])->name('aboutus');
Route::get('/contact', [PageController::class, 'getContact'])->name('contact');
Route::post('/comment/{id}', [PageController::class,'newComment']);



