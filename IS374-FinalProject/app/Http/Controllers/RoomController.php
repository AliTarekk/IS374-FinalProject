<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::all()->sortBy('RoomNumber');
        return view('layouts.include.admin.rooms.index', ['rooms' => $rooms]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.include.admin.rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoomRequest $request)
    {
        $validated = $request->validate([
            'RoomNumber' => 'required|numeric',
			'MaxCapacity' => 'required|numeric|min:10|max:1000'
        ]);

        Room::create($validated);
        
        return redirect()->route('rooms.index')->with('status',"Room Inserted Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        return view('layouts.include.admin.rooms.show', ['room' => $room]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        return view('layouts.include.admin.rooms.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoomRequest $request, Room $room)
    {
        $validated = $request->validate([
            'RoomNumber' => 'required|numeric',
			'MaxCapacity' => 'required|numeric|min:10|max:1000'
        ]);

        $room->update($validated);

        return redirect()->route('rooms.index')->with('status',"Record Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        Room::destroy($room->RoomNumber);

        return redirect()->back()->with('status',"Record Deleted Successfully");
    }
}
