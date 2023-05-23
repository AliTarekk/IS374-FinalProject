<?php

use App\Http\Controllers\EnrollController;
use App\Http\Controllers\HomeController;
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


Route::get('/', [HomeController::class, "index"])->name('home');

Route::get('/admin', function () {
    return view('layouts.admin');
})->name("admin");


Route::get('/dashboard', function () {
    return view('layouts.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/student/dashboard/{id}', [EnrollController::class, 'index'])->name("student.dashboard");

Route::get('/student/enroll', [EnrollController::class, 'create'])->name("student.enroll");
// Route::get('/student/enroll/index', [EnrollController::class, 'index'])->name("student.index");
Route::post('/student/enroll/store', [EnrollController::class, 'store'])->name("student.store");

require __DIR__.'/auth.php';
