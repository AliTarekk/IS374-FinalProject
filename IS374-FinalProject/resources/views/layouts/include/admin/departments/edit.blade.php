<!-- show specified department with a form to edit it -->

@extends("layouts.admin")

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Edit Department</h1>
            <p><a href="{{ route('departments.index') }}">Return to all Departments</a></p>
        </div>

        <div class="row">
            <!-- form to edit selected department -->
            <form action="{{ route('departments.update', $department->DepartmentId) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="Name">Department Name</label>
                    <input type="text" class="form-control" id="Name" name="Name" value="{{ $department->Name }}">
                </div>
                <!-- prompt user to choose faculty from exsiting -->
                <div class="form-group">
                    <label for="FacultyId">Faculty</label>
                    <select class="form-control" id="FacultyId" name="FacultyId">
                        @foreach ($faculties as $faculty)
                            <option value="{{ $faculty->FacultyId }}" {{ $faculty->FacultyId == $department->FacultyId ? 'selected' : '' }}>{{ $faculty->Name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
@endsection
