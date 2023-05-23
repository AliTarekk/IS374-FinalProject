<?php

use App\Http\Controllers\PersonController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\EnrollController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\DepartmentController;

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
    // Route::get('/', function () {
    //     return view('home');
    // })->name("home");

Route::get('/dashboard', function () {
    return view('dashboard');
})->name("dashboard");

// Route::get('/dashboard', [StudentController::class, 'index_enroll'])->name("dashboard");

Route::get('/', [HomeController::class, "index"])->name('home');

Route::get('/student_profile', function () {
    return view('student_profile');
})->name("student_profile");

Route::get('/student_course', function () {
    return view('student_course');
})->name("student_course");

Route::get('/admin', function () {
    return view('layouts.admin');
})->name("admin");

Route::get('/student/dashboard/{id}', [StudentController::class, 'index_enroll'])->name("student.dashboard");

Route::get('/student/enroll', [StudentController::class, 'create_enroll'])->name("student.enroll");
Route::get('/student/enroll/index', [StudentController::class, 'index_enroll'])->name("student.index");
Route::get('/student/enroll/add', [StudentController::class, 'add_enroll'])->name("student.add");
Route::post('/student/enroll/store', [StudentController::class, 'store_enroll'])->name("student.store");

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


Route::get('/student/dashboard/{id}', [StudentController::class, 'index_enroll'])->name("student.dashboard");

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// add endpoints for faculties
Route::get('/faculties', [FacultyController::class, 'index'])->name('faculties.index');
Route::get('/faculties/create', [FacultyController::class, 'create'])->name('faculties.create');
Route::post('/faculties', [FacultyController::class, 'store'])->name('faculties.store');
Route::get('/faculties/{faculty}', [FacultyController::class, 'show'])->name('faculties.show');
Route::get('/faculties/{faculty}/edit', [FacultyController::class, 'edit'])->name('faculties.edit');
Route::put('/faculties/{faculty}', [FacultyController::class, 'update'])->name('faculties.update');
Route::delete('/faculties/{faculty}', [FacultyController::class, 'destroy'])->name('faculties.destroy');

// add endpoints for departments
Route::get('/departments', [DepartmentController::class, 'index'])->name('departments.index');
Route::get('/departments/create', [DepartmentController::class, 'create'])->name('departments.create');
Route::post('/departments', [DepartmentController::class, 'store'])->name('departments.store');
Route::get('/departments/{department}', [DepartmentController::class, 'show'])->name('departments.show');
Route::get('/departments/{department}/edit', [DepartmentController::class, 'edit'])->name('departments.edit');
Route::put('/departments/{department}', [DepartmentController::class, 'update'])->name('departments.update');
Route::delete('/departments/{department}', [DepartmentController::class, 'destroy'])->name('departments.destroy');

// add endpoints for courses
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');
Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
Route::get('/courses/{course}', [CourseController::class, 'show'])->name('courses.show');
Route::get('/courses/{course}/edit', [CourseController::class, 'edit'])->name('courses.edit');
Route::put('/courses/{course}', [CourseController::class, 'update'])->name('courses.update');
Route::delete('/courses/{course}', [CourseController::class, 'destroy'])->name('courses.destroy');

// add endpoints for rooms
Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
Route::get('/rooms/create', [RoomController::class, 'create'])->name('rooms.create');
Route::post('/rooms', [RoomController::class, 'store'])->name('rooms.store');
Route::get('/rooms/{room}', [RoomController::class, 'show'])->name('rooms.show');
Route::get('/rooms/{room}/edit', [RoomController::class, 'edit'])->name('rooms.edit');
Route::put('/rooms/{room}', [RoomController::class, 'update'])->name('rooms.update');
Route::delete('/rooms/{room}', [RoomController::class, 'destroy'])->name('rooms.destroy');

// add endpoints for sections
Route::get('/sections', [SectionController::class, 'index'])->name('sections.index');
Route::get('/sections/create', [SectionController::class, 'create'])->name('sections.create');
Route::post('/sections', [SectionController::class, 'store'])->name('sections.store');
Route::get('/sections/{section}', [SectionController::class, 'show'])->name('sections.show');
Route::get('/sections/{section}/edit', [SectionController::class, 'edit'])->name('sections.edit');
Route::put('/sections/{section}', [SectionController::class, 'update'])->name('sections.update');
Route::delete('/sections/{section}', [SectionController::class, 'destroy'])->name('sections.destroy');

// add endpoints for people
Route::get('/people', [PersonController::class, 'index'])->name('people.index');
Route::get('/people/create', [PersonController::class, 'create'])->name('people.create');
Route::post('/people', [PersonController::class, 'store'])->name('people.store');
Route::get('/people/{person}', [PersonController::class, 'show'])->name('people.show');
Route::get('/people/{person}/edit', [PersonController::class, 'edit'])->name('people.edit');
Route::put('/people/{person}', [PersonController::class, 'update'])->name('people.update');
Route::delete('/people/{person}', [PersonController::class, 'destroy'])->name('people.destroy');

// add endpoints for staff
Route::get('/staff', [StaffController::class, 'index'])->name('staff.index');
Route::get('/staff/create', [StaffController::class, 'create'])->name('staff.create');
Route::post('/staff', [StaffController::class, 'store'])->name('staff.store');
Route::get('/staff/{staff}', [StaffController::class, 'show'])->name('staff.show');
Route::get('/staff/{staff}/edit', [StaffController::class, 'edit'])->name('staff.edit');
Route::put('/staff/{staff}', [StaffController::class, 'update'])->name('staff.update');
Route::delete('/staff/{staff}', [StaffController::class, 'destroy'])->name('staff.destroy');

require __DIR__.'/auth.php';
