<!-- show a specified course and a form to edit it -->

<div class="row">
    <div class="col-12">
        <h1>Edit Course</h1>
        <p><a href="{{ route('courses.index') }}">Return to all Courses</a></p>
    </div>

    <div class="row">
        <!-- form to edit selected course -->
        <form action="{{ route('courses.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="CourseTitle">Course Title</label>
                <input type="text" class="form-control" id="CourseTitle" name="CourseTitle" value="{{ $course->CourseTitle }}">
            </div>
            <div class="form-group">
                <label for="CreditHours">Credit Hours</label>
                <input type="text" class="form-control" id="CreditHours" name="CreditHours" value="{{ $course->CreditHours }}">
            </div>
            <div class="form-group">
                <label for="MinStudents">Minimum Students</label>
                <input type="text" class="form-control" id="MinStudents" name="MinStudents" value="{{ $course->MinStudents }}">
            </div>
            <!-- 
                <div class="form-group">
                    <label for="CoursePrerequisites">Course Prerequisites</label>
                    <input type="text" class="form-control" id="CoursePrerequisites" name="CoursePrerequisites" placeholder="{{ $course->CoursePrerequisites }}">
                </div>
             -->

            <div class="form-group">
                <label for="DepartmentId">Department ID</label>
                <select class="form-control" id="DepartmentId" name="DepartmentId">
                    @foreach($departments as $department)
                        <option value="{{ $department->DepartmentId }}">{{ $department->Name }}</option>
                    @endforeach
                </select>

            <button type="submit" class="btn btn-primary">Update Course</button>
        </form>
    </div>
</div>

