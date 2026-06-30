<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('home');


Route::prefix('admin')->group(function(){
    Route::get('index',[UserController::class,'index'])->name('admin_index');
});



//coursesroute
Route::get('courses', [CoursesController::class,'index'])->name('courses.index');
Route::get('create_courses', [CoursesController::class,'create'])->name('courses.create');
Route::post('store_courses', [CoursesController::class,'store'])->name('courses.store');
Route::get('edit_courses/{id}', [CoursesController::class,'edit'])->name('courses.edit');
Route::post('update_courses/{id}', [CoursesController::class,'update'])->name('courses.update');
Route::post('delete_courses/{id}', [CoursesController::class,'destroy'])->name('courses.delete');


//This is in the case of route not found
Route::fallback(function(){
    return 'page NOT FOUND';
});