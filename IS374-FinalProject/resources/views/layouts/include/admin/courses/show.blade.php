<!-- show specified course with edit and delete actions -->

@extends("layouts.admin")

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Course Details</h1>
            <p><a href="{{ route('courses.index') }}">Back</a></p>
        </div>

        <div class="col-12">
            <div class="form-group">
                <strong>Course Title:</strong>
                {{ $course->CourseTitle }}
            </div>

            <div class="form-group">
                <strong>Credit Hours:</strong>
                {{ $course->CreditHours }}
            </div>

            <div class="form-group">
                <strong>Minimum Students:</strong>
                {{ $course->MinStudents }}
            </div>

            <!-- TODO: supply department name instead of ID -->
            <div class="form-group">
                <strong>Department Name:</strong>
                {{ $course->DepartmentId }}
            </div>

            <!-- update and delete actions -->
            <form action="{{ route('courses.destroy', $course->CourseCode) }}" method="POST">
                <a href="{{ route('courses.edit', $course->CourseCode) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    </div>
@endsection
