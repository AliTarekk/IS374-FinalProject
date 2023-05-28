<!-- show all fetched courses -->

@extends("layouts.admin")

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Courses</h1>
            <p><a href="{{ route('courses.create') }}">Add new course</a></p>
        </div>
    </div>

    <!-- display status message -->
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <!-- display courses -->
    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>Course Code</td>
                        <td>Course Title</td>
                        <td>Course Credit Hours</td>
                        <td>Course Minimum Students</td>
                        <td>deparment</td>
                        <td>Course Created At</td>
                        <td>Course Updated At</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($courses as $course)
                        <tr>
                            <td>{{ $course->CourseCode }}</td>
                            <td>{{ $course->CourseTitle }}</td>
                            <td>{{ $course->CreditHours }}</td>
                            <td>{{ $course->MinStudents }}</td>
                            <!-- TODO: supply department name instead of ID -->
                            <td>{{ $course->DepartmentId }}</td>
                            <td>{{ $course->created_at }}</td>
                            <td>{{ $course->updated_at }}</td>
                            <td>
                                <a class="btn btn-small btn-success" href="{{ route('courses.show', $course->CourseCode) }}">Show this Course</a>
                                <a class="btn btn-small btn-info" href="{{ route('courses.edit', $course->CourseCode) }}">Edit this Course</a>
                                <form action="{{ route('courses.destroy', $course->CourseCode) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-small btn-danger" type="submit">Delete this Course</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
