<!-- form to create new faculty -->

@extends("layouts.admin")

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Create a new Section</h1>
            <p><a href="{{ route('sections.index') }}">Return to all sections</a></p>
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
            <form action="{{ route('sections.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>section maxstudent</label>
                    <input type="number" class="form-control" name="MaxStudent" placeholder="Enter maximum capacity">
                    <label>period</label>
                    <input type="number" class="form-control" name="Period" placeholder="Enter period">
                    <label>section StaffId</label>
                    <input type="number" class="form-control" name="StaffId" placeholder="Enter period">
                    <label>section CourseCode</label>
                    <input type="number" class="form-control" name="CourseCode" placeholder="Enter period">
                    <label>section RoomNumber</label>
                    <input type="number" class="form-control" name="RoomNumber" placeholder="Enter period">
                    <select name="Day">
                        <option value='Sunday'>Sunday</option>
                        <option value='Monday'>Monday</option>
                        <option value='Tuesday'>Tuesday</option>
                        <option value='Wednesday'>Wednesday</option>
                        <option value='Thursday'>Thursday</option>
                        <option value='Friday'>Friday</option>
                        <option value='Saturday'>Saturday</option>
                    </select>

                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
