<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('home');


Route::prefix('admin')->group(function(){
    Route::get('index',[UserController::class,'index'])->name('admin_index');
});



//Courses route
Route::get('courses', [CoursesController::class,'index'])->name('courses.index');
Route::get('create_courses', [CoursesController::class,'create'])->name('courses.create');
Route::post('store_courses', [CoursesController::class,'store'])->name('courses.store');
Route::get('edit_courses/{id}', [CoursesController::class,'edit'])->name('courses.edit');
Route::post('update_courses/{id}', [CoursesController::class,'update'])->name('courses.update');
Route::post('delete_courses/{id}', [CoursesController::class,'destroy'])->name('courses.delete');

//Students route
Route::get('student', [StudentController::class,'index'])->name('students.index');
Route::get('create_student', [StudentController::class,'create'])->name('students.create');
Route::post('store_student', [StudentController::class,'store'])->name('students.store');
Route::get('edit_student/{id}', [StudentController::class,'edit'])->name('students.edit');
Route::post('update_student/{id}', [StudentController::class,'update'])->name('students.update');
Route::post('delete_student/{id}', [StudentController::class,'destroy'])->name('students.delete');

//Students training courses
Route::get('training', [TrainingController::class,'index'])->name('trainings.index');
Route::get('create_training', [TrainingController::class,'create'])->name('trainings.create');
Route::post('store_training', [TrainingController::class,'store'])->name('trainings.store');
Route::get('edit_training/{id}', [TrainingController::class,'edit'])->name('trainings.edit');
Route::post('update_training/{id}', [TrainingController::class,'update'])->name('trainings.update');
Route::post('delete_training/{id}', [TrainingController::class,'destroy'])->name('trainings.delete');
Route::get('detail_training/{id}', [TrainingController::class,'detail'])->name('trainings.detail');
Route::get('add_student/{id}', [TrainingController::class,'addStudent'])->name('trainings.addStudent');
Route::post('store_add_student/{id}', [TrainingController::class,'storeAddStudent'])->name('trainings.storeAddStudent');
Route::post('delete_student_enrollement/{id}', [TrainingController::class,'deleteStudent'])->name('trainings.delete_student_enrollement');


//This is in the case of route not found
Route::fallback(function(){
    return 'page NOT FOUND';
});