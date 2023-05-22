<?php

use App\Http\Controllers\StudentController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->name("dashboard");

Route::get('/admin', function () {
    return view('admin');
})->name("admin");

Route::get('/student/dashboard/{id}', [StudentController::class, 'index_enroll'])->name("student.dashboard");

Route::get('/student/enroll', [StudentController::class, 'create_enroll'])->name("student.enroll");
Route::get('/student/enroll/index', [StudentController::class, 'index_enroll'])->name("student.index");
Route::get('/student/enroll/add', [StudentController::class, 'add_enroll'])->name("student.add");
Route::post('/student/enroll/store', [StudentController::class, 'store_enroll'])->name("student.store");

