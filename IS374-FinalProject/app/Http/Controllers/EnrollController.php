<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enroll;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session as FacadesSession;

class EnrollController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $students = Student::with('courses')->get();
        // $students = Student::all();
        // foreach ($students->courses as $course) {
        //     echo $course->enrolls->created_at;
        // }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::all();
        return view('layouts.include.student.enroll', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Enroll $enroll)
    {
        $random = collect()->range(1, 10);
        $request['StudentId'] = collect($random)->random(); //until we make the login auth
        $validated = $request->validate([
            'StudentId' => 'required|exists:students,StudentId',
			'CourseCode' => 'required|exists:courses,CourseCode',
        ]);
        // dd($request);
        $enroll->create($validated);
        return view('layouts.include.student.enroll-show', ['enrolls' => Enroll::all()->where('StudentId', '=', $request['StudentId'])->sortBy('CourseCode')])->with('success', "Course was Added Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $validated = $request->validate([
        //     'StudentId' => 'required|exists:students, StudentId',
		// 	'CourseCode' => 'required|exists:courses, CourseCode',
        //     'FirstMidterm' => 'required|min:0|max:30',
        //     'SecondMidterm' => 'required|min:0|max:20',
        //     'CourseWork' => 'required|min:0|max:10',
        //     'Grade' => 'required',
        // ]);

        // $enroll->update($validated);

        // return redirect()->back()->with('status',"Record Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
