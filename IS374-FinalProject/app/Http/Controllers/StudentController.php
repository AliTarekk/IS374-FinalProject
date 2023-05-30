<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Course;
use App\Models\Enroll;
use App\Models\Person;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Student $student)
    {
        $students = Person::join('students', 'people.PersonId', '=', 'students.PersonId')->where('PersonType', '=', 'Student')->get();
        return view('layouts.include.admin.student.index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.include.admin.student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        $validated = $request->validate([
			'HoursAchieved' => 'required|numeric|min:0|max:200',
            // 'AdvisorId' => 'required', //needs exists:Advisor, id
            'PersonId' => 'required|exists:people, PersonId',
        ]);

        Student::create([
            'HoursAchieved' => $validated['HoursAchieved'],
            // 'AdvisorId' => $validated['AdvisorId'],
            'PersonId' => $validated['PersonId'],
        ]);

        return redirect()->back()->with('status',"Student Inserted Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $validated = $request->validate([
            'GPA' => 'numeric|min:1.0|max:4.0',
			'HoursAchieved' => 'required|numeric|min:0|max:200',
            // 'AdvisorId' => 'required', //needs exists:Advisor, id
            'PersonId' => 'required|exists:people, PersonId',
        ]);

        $student->update($validated);

        return redirect()->back()->with('status',"Record Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);

        return redirect()->back()->with('status',"Record Deleted Successfully");
    }

    public function create_enroll(Enroll $enroll, Request $request)
    {
        $courses = Course::all();
        return view('layouts.include.enroll.create', compact('courses'));
    }

    public function store_enroll(Enroll $enroll, Request $request)
    {
        $random = collect()->range(1, 10);
        $request['StudentId'] = 4; //collect($random)->random(); //until we make the login auth
        $records = Enroll::all()->where('StudentId', '=', $request['StudentId'])->sortBy('CourseCode');
        if($request->method() == 'GET'){
            return view('layouts.include.enroll.show', ['enrolls' => $records]);
        }
        $validated = $request->validate([
            'StudentId' => 'required|exists:students,StudentId',
			'CourseCode' => 'required|exists:courses,CourseCode',
        ]);
        // dd(count($records));
        if(count($records) < 7){
            $enroll->create($validated);
            return view('layouts.include.enroll.show', ['enrolls' => $records])->with('status', "Course was Added Successfully");
        }
        else{
            return redirect()->back()->with('status', "Maximum Number of Enrolled Courses Achieved");
        }
    }

    public function enroll(Enroll $enroll, Request $request){
        $validated = $request->validate([
            'StudentId' => 'required|exists:students, StudentId',
			'CourseCode' => 'required|exists:courses, CourseCode',
            'FirstMidterm' => 'required|min:0|max:30',
            'SecondMidterm' => 'required|min:0|max:20',
            'CourseWork' => 'required|min:0|max:10',
            'Grade' => 'required',
        ]);

        $enroll->update($validated);

        return redirect()->back()->with('status',"Record Updated Successfully");
    }

    public function index_enroll(Student $student)
    {
        // $students = Student::with('courses')->get();
        // $students = Student::all();
        // foreach ($students->courses as $course) {
        //     echo $course->enrolls->created_at;
        // }
    }
}
