<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonRequest;
use App\Http\Requests\UpdatePersonRequest;
use App\Models\Person;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $people = Person::all()->sortBy('PersonId');
        return view('layouts.include.admin.people.index', ['people' => $people]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.include.admin.people.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePersonRequest $request)
    {
        $validated = $request->validate([
            'FirstName' => 'required|string',
			'LastName' => 'required|string',
            'email'=>'required|email',
            'Birthdate'=>'required|date',
            'PersonType'=>'required|string',
            'Gender'=>'required|string'
        ]);
        
        Person::create($validated);
        
        return redirect()->route('people.index')->with('status',"person Inserted Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        return view('layouts.include.admin.people.show', ['person' => $person]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Person $person)
    {
        return view('layouts.include.admin.people.edit', compact('person'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePersonRequest $request, Person $person)
    {
        $validated = $request->validate([
            'FirstName' => 'required|string',
			'LastName' => 'required|string',
            'email'=>'required|email',
            'Birthdate'=>'required|date',
            'PersonType'=>'required|string',
            'Gender'=>'required|string'
        ]);

        $person->update($validated);

        return redirect()->route('people.index')->with('status',"Record Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        Person::destroy($person->PersonId);

        return redirect()->back()->with('status',"Record Deleted Successfully");
    }
}
