<!-- show specified faculty with a form to edit it -->

@extends("layouts.admin")

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Edit Faculty</h1>
            <p><a href="{{ route('rooms.index') }}">Return to all rooms</a></p>
        </div>

        <div class="row">
            <!-- form to edit selected faculty -->
            <form action="{{ route('rooms.update', $room->RoomNumber) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label >RoomNumber</label>
                    <input type="number" class="form-control" name="RoomNumber" value="{{ $room->RoomNumber }}">
                    <label >Max capacity</label>
                    <input type="number" class="form-control" name="MaxCapacity" value="{{ $room->MaxCapacity }}">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
