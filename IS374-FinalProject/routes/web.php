<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/dashboard', function () {
    return view('dashboard');
})->name("dashboard");

Route::get('/student_profile', function () {
    return view('student_profile');
})->name("student_profile");

Route::get('/student_course', function () {
    return view('student_course');
})->name("student_course");

Route::get('/admin', function () {
    return view('admin');
})->name("admin");

Route::get('/admin_all_course', function () {
    return view('admin_all_course');
})->name("admin_all_course");

Route::get('/admin_new_course', function () {
    return view('admin_new_course');
})->name("admin_new_course");

Route::get('/admin_add_student', function () {
    return view('admin_add_student');
})->name("admin_add_student");

Route::get('/admin_details_student', function () {
    return view('admin_details_student');
})->name("admin_details_student");

//Route::get('/showstudent', [CartController::class, 'show'])->name('show_student');
//Route::get('/destroy/{Id}', [CartController::class, 'destroy'])->name('destroy_student');
//Route::get('/cart', [CartController::class, 'add'])->name('addcart');
//Route::get('/editCart/{rowId}', [CartController::class, 'edit'])->name('editCart');

