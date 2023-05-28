<!-- form to create new faculty -->

@extends("layouts.admin")

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Create a new Faculty</h1>
            <p><a href="{{ route('rooms.index') }}">Return to all rooms</a></p>
        </div>
    </div>

    <!-- display errors if any -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <!-- display all errors -->
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                <!-- end display all errors -->
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-12">
            <form action="{{ route('rooms.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Room Number</label>
                    <input type="number" class="form-control" name="RoomNumber" placeholder="Enter Room Number">
                    <input type="number" class="form-control" name="MaxCapacity" placeholder="Enter maximum capacity">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
