<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Department;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all courses
        $courses = Course::all()->sortBy('CourseCode');
        return view('layouts.include.admin.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Get all departments
        $departments = Department::all()->sortBy('DepartmentId');
        // Return view
        return view('layouts.include.admin.courses.create', ['departments' => $departments]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        // Store the course

        // validate entered data
        $validated = $request->validate(
            [
                'CourseTitle' => 'required|max:255|string',
                'CreditHours' => 'required|numeric',
                'MinStudents' => 'required|numeric',
                'DepartmentId' => 'required|exists:departments,DepartmentId'
                // TODO: add validation for courses and multiple prerequisites
            ]
        );

        // create the course
        $course = Course::create($validated);

        // Redirect to the course
        return redirect()->route('courses.index', $course)->with('status', 'Course created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        // Return view
        return view('layouts.include.admin.courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        $departments = Department::all()->sortBy('DepartmentId');
        // Return view
        return view('layouts.include.admin.courses.edit', ['course' => $course, 'departments' => $departments]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        // Update the course

        // validate entered data
        $validated = $request->validated(
            [
                'CourseTitle' => 'required|max:255',
                'CreditHours' => 'required|numeric',
                'MinStudents' => 'required|numeric',
                'DepartmentId' => 'required|exists:departments,DepartmentId'
                // 'CoursePrerequisites' => 'required|max:255', // TODO: add validation for courses and multiple prerequisites
            ]
        );
        $course->update($validated);

        // Redirect to the course
        return redirect()->route('layouts.include.admin.courses.show', $course);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        // Delete the course
        $course->delete();

        // Redirect to the courses
        return redirect()->back()->with('status', 'Course deleted successfully!');
    }
}
