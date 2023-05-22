<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Http\Requests\StoreFacultyRequest;
use App\Http\Requests\UpdateFacultyRequest;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     //index->hygeeb el data kolahaaaa
    public function index()
    {
        $faculties = Faculty::all()->sortBy('FacultyId');
        return view('', ['faculties' => $faculties]);
    }

    /**
     * Show the form for creating a new resource.
     */
     //create-> bywdy el view bas
     public function create()
    {
        return view('');
    }

    /**
     * Store a newly created resource in storage.
     */

    //store-> byakhod el data mn view w y-store fe db
     public function store(StoreFacultyRequest $request)
    {
        $validated = $request->validate([
			'Name' => 'required|string'
        ]);

        //fe satr naaa's plus nkhale el name lowercase kolo abl ma a-store fe el db
        return redirect()->back()->with('status',"Student Inserted Successfully");
    }

    /**
     * Display the specified resource.
     */

     //show-> showing only one 
    public function show(Faculty $faculty)
    {
        return view('', ['faculty' => $faculty]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    
    
     public function edit(Faculty $faculty)
    {
        return view('', ['faculty' => $faculty]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFacultyRequest $request, Faculty $faculty)
    {
        $validated = $request->validate([
			'Name' => 'required|string'
        ]);

        $faculty->update($validated);

        return redirect()->back()->with('status',"Record Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faculty $faculty)
    {
        Faculty::destroy($faculty->id);

        return redirect()->back()->with('status',"Record Deleted Successfully");
    }
}
