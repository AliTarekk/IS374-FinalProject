<!-- form to create new course -->

@extends("layouts.admin")

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Create a new Course</h1>
            <p><a href="{{ route('courses.index') }}">Return to all Courses</a></p>
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
            <form action="{{ route('courses.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="CourseTitle">Course Title</label>
                    <input type="text" class="form-control" id="CourseTitle" name="CourseTitle" placeholder="Enter Course Title">
                </div>
                <div class="form-group">
                    <label for="CreditHours">Credit Hours</label>
                    <input type="text" class="form-control" id="CreditHours" name="CreditHours" placeholder="Enter Credit Hours">
                </div>
                <div class="form-group">
                    <label for="MinStudents">Minimum Students</label>
                    <input type="text" class="form-control" id="MinStudents" name="MinStudents" placeholder="Enter Minimum Students">
                </div>
                <!-- <div class="form-group">
                    <label for="CoursePrerequisites">Course Prerequisites</label>
                    <input type="text" class="form-control" id="CoursePrerequisites" name="CoursePrerequisites" placeholder="Enter Course Prerequisites">
                </div> -->
                <div class="form-group">
                    <label for="DepartmentId">Department ID</label>
                    <select class="form-control" id="DepartmentId" name="DepartmentId">
                        @foreach($departments as $department)
                            <option value="{{ $department->DepartmentId }}">{{ $department->Name }}</option>
                        @endforeach
                    </select>
                <button type="submit" class="btn btn-primary">Create Course</button>
            </form>
        </div>
    </div>
@endsection
