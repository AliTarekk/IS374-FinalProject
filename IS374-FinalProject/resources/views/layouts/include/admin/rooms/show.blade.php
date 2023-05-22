<!-- show specified faculty and buttons to update or delete it -->

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Room Details</h1>
            <p><a href="{{ route('rooms.index') }}">Back to all rooms</a></p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h2>{{ $room->Name }}</h2>
            <p>Faculty ID: {{ $room->RoomNumber }}</p>
            <p>Created at: {{ $room->created_at }}</p>
            <p>Updated at: {{ $room->updated_at }}</p>
            <p>
                <a href="{{ route('rooms.edit', ['room' => $room]) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('rooms.destroy', ['room' => $room]) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-danger">
                </form>
            </p>
        </div>
    </div>

</div>