<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Http\Requests\StoreStaffRequest;
use App\Http\Requests\UpdateStaffRequest;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staff = Staff::all()->sortBy('StaffId');
        return view('layouts.include.admin.staff.index', ['staff' => $staff]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.include.admin.staff.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStaffRequest $request)
    {
        $validated = $request->validate([
            'Title' => 'required|string',
			'EmploymentType' => 'required|string',
            'PayRate'=>'required|numeric|min:0.0|max:10000.0',
            'Salary'=>'required|numeric|min:0.0|max:1000000.0',
            'PersonId' => 'required|exists:people,PersonId'
        ]);

        Staff::create($validated);
        
        return redirect()->route('staff.index')->with('status',"staff Inserted Successfully");
    }

    //$table->enum('Title', ['Instructor', 'Professor','AssistantProfessor','AssociateProfessor']);
    
    //$table->enum('EmploymentType', ['PartTime', 'FullTime']);
    /**
     * Display the specified resource.
     */
    public function show(Staff $staff)
    {
        return view('layouts.include.admin.staff.show', ['staff' => $staff]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Staff $staff)
    {
        return view('layouts.include.admin.staff.edit', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStaffRequest $request, Staff $staff)
    {
        $validated = $request->validate([
            'Title' => 'required|string',
			'EmploymentType' => 'required|string',
            'PayRate'=>'required|numeric|min:0.0|max:10000.0',
            'Salary'=>'required|numeric|min:0.0|max:1000000.0',
            'PersonId' => 'required|exists:people,PersonId'
        ]);

        $staff->update($validated);

        return redirect()->route('staff.index')->with('status',"Record Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Staff $staff)
    {
        Staff::destroy($staff->StaffId);

        return redirect()->back()->with('status',"Record Deleted Successfully");
    }
}
