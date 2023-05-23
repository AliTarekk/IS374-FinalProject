<!-- show all fetched faculties -->

<div class="row">
    <div class="col-12">
        <h1>All Rooms</h1>
        <p><a href="{{ route('rooms.create') }}">Create a new Room</a></p>
    </div>
</div>

<!-- display status message -->
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<!-- display faculties -->
<div class="row">
    <div class="col-12">
        <table class="table">
            <thead>
                <tr>
                    <th>Room</th>
                    <th>Capacity</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rooms as $room)
                    <tr>
                        <td>{{ $room->RoomNumber }}</td>
                        <td>{{ $room->MaxCapacity }}</td>
                        <td>
                            <a href="{{ route('rooms.show', $room->RoomNumber) }}">Show</a>
                            <a href="{{ route('rooms.edit', $room->RoomNumber) }}">Edit</a>
                            <form action="{{ route('rooms.destroy', $room->RoomNumber) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>