<?php

namespace App\Http\Controllers;

use App\Models\department;
use App\Models\Faculty;
use App\Http\Requests\StoredepartmentRequest;
use App\Http\Requests\UpdatedepartmentRequest;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = department::all()->sortBy('DepartmentId');
        // return view('', ['departments' => $departments]);
        return view('layouts.include.admin.departments.index',compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // the view should contain data of faculties to be selected from
        $faculties = Faculty::all()->sortBy('FacultyId');
        return view('layouts.include.admin.departments.create', ['faculties' => $faculties]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoredepartmentRequest $request)
    {
        $validated = $request->validate([
			'Name' => 'required|string',
            'FacultyId' => 'required|exists:faculties,FacultyId'
        ]);

        department::create($validated);

        //fe satr naaa's plus nkhale el name lowercase kolo abl ma a-store fe el db
        return redirect()->route('departments.index')->with('status',"Student Inserted Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(department $department)
    {
        return view('layouts.include.admin.departments.show', ['department' => $department]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(department $department)
    {
        $faculties = Faculty::all()->sortBy('FacultyId');
        return view('layouts.include.admin.departments.edit', ['department' => $department, 'faculties' => $faculties]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatedepartmentRequest $request, department $department)
    {
        $validated = $request->validate([
			'Name' => 'required|string',
            'FacultyId' => 'required|exists:faculties,FacultyId'
        ]);

        $department->update($validated);

        return redirect()->route('departments.index')->with('status',"Record Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(department $department)
    {
        department::destroy($department->DepartmentId);

        return redirect()->back()->with('status',"Record Deleted Successfully");
    }
}
