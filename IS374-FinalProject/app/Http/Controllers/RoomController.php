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
        return view('', ['rooms' => $rooms]);
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
    public function store(StoreRoomRequest $request)
    {
        $validated = $request->validate([
			'MaxCapacity' => 'required|string|numeric|min:10|max:30'
        ]);

        //fe satr naaa's plus nkhale el name lowercase kolo abl ma a-store fe el db
        return redirect()->back()->with('status',"Student Inserted Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        return view('', ['room' => $room]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        return view('', ['room' => $room]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoomRequest $request, Room $room)
    {
        $validated = $request->validate([
			'MaxCapacity' => 'required|string|numeric|min:10|max:30'
        ]);

        $room->update($validated);

        return redirect()->back()->with('status',"Record Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        Room::destroy($room->id);

        return redirect()->back()->with('status',"Record Deleted Successfully");
    }
}
