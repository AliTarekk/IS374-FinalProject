<!-- form to create new department -->

@extends("layouts.admin")

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Create a new Department</h1>
            <p><a href="{{ route('departments.index') }}">Return to all Departments</a></p>
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
            <form action="{{ route('departments.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="Name">Department Name</label>
                    <input type="text" class="form-control" id="Name" name="Name" placeholder="Enter Department Name">
                </div>
                <!-- prompt user to choose faculty from exsiting -->
                <div class="form-group">
                    <label for="FacultyId">Faculty</label>
                    <select class="form-control" id="FacultyId" name="FacultyId">
                        @foreach ($faculties as $faculty)
                            <option value="{{ $faculty->FacultyId }}">{{ $faculty->Name }}</option>
                        @endforeach
                        </select>

                <button type="submit" class="btn btn-primary">Create Department</button>
            </form>
        </div>
    </div>
@endsection
