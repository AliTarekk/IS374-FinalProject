<?php

namespace App\Http\Controllers;

use App\Models\department;
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
        return view('', ['departments' => $departments]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoredepartmentRequest $request)
    {
        $validated = $request->validate([
			'Name' => 'required|string',
            'FacultyId' => 'required|exists:faculties, FacultyId'
        ]);

        //fe satr naaa's plus nkhale el name lowercase kolo abl ma a-store fe el db
        return redirect()->back()->with('status',"Student Inserted Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(department $department)
    {
        return view('', ['department' => $department]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(department $department)
    {
        return view('', ['department' => $department]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatedepartmentRequest $request, department $department)
    {
        $validated = $request->validate([
			'Name' => 'required|string',
            'FacultyId' => 'required|exists:faculties, FacultyId'
        ]);

        $department->update($validated);

        return redirect()->back()->with('status',"Record Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(department $department)
    {
        department::destroy($department->id);

        return redirect()->back()->with('status',"Record Deleted Successfully");
    }
}
