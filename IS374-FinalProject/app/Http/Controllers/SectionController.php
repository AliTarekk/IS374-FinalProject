<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Http\Requests\StoreSectionRequest;
use App\Http\Requests\UpdateSectionRequest;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sections = Section::all()->sortBy('SectionId');
        return view('', ['sections' => $sections]);
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
    public function store(StoreSectionRequest $request)
    {
        $validated = $request->validate([
			'MaxStudents'=>'required|numeric|min:10|max:30',
        //'Day'=>'required|numeric|min:0|max:200',
        'Period'=>'required|numeric|min:1|max:6',
        'StaffId'=> 'required|exists:staff, StaffId',,
        'CourseCode'=> 'required|exists:courses, CourseCode',
        'RoomNumber'=> 'required|exists:rooms, RoomNumber'
        ]);

        //fe satr naaa's plus nkhale el name lowercase kolo abl ma a-store fe el db
        return redirect()->back()->with('status',"Student Inserted Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Section $section)
    {
        return view('', ['section' => $section]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Section $section)
    {
        return view('', ['section' => $section]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSectionRequest $request, Section $section)
    {
        $validated = $request->validate([
			'MaxStudents'=>'required|numeric|min:10|max:30',
        //'Day'=>'required|numeric|min:0|max:200',
        'Period'=>'required|numeric|min:1|max:6',
        'StaffId'=> 'required|exists:staff, StaffId',,
        'CourseCode'=> 'required|exists:courses, CourseCode',
        'RoomNumber'=> 'required|exists:rooms, RoomNumber'
        ]);

        $section->update($validated);

        return redirect()->back()->with('status',"Record Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Section $section)
    {
        Section::destroy($section->id);

        return redirect()->back()->with('status',"Record Deleted Successfully");
    }
}
