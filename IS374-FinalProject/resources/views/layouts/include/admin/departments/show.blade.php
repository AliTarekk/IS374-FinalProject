<!-- show specified department with edit and delete actions -->

<div class="row">
    <div class="col-12">
        <h1>Department Details</h1>
        <p><a href="{{ route('departments.index') }}">Back</a></p>
    </div>

    <div class="col-12">
        <div class="form-group">
            <strong>Department Name:</strong>
            {{ $department->Name }}
        </div>

        <div class="form-group">
            <strong>Faculty Name:</strong>
            {{ $department->faculty->Name }}

        <!-- update and delete actions -->
        <form action="{{ route('departments.destroy', $department->DepartmentId) }}" method="POST">
            <a href="{{ route('departments.edit', $department->DepartmentId) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
</div>
