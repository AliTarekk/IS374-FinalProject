<!-- show all fetched departments -->

<div class="row">
    <div class="col-12">
        <h1>All Departments</h1>
        <p><a href="{{ route('departments.create') }}">Create a new Department</a></p>
    </div>
</div>

<!-- display status message -->
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<!-- display departments -->
<div class="row">
    <div class="col-12">
        <table class="table">
            <thead>
                <tr>
                    <th>Department Name</th>
                    <th>Faculty Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($departments as $department)
                    <tr>
                        <td>{{ $department->Name }}</td>
                        <td>{{ $department->faculty->Name }}</td>
                        <td>
                            <a href="{{ route('departments.show', $department->DepartmentId) }}">Show</a>
                            <a href="{{ route('departments.edit', $department->DepartmentId) }}">Edit</a>
                            <form action="{{ route('departments.destroy', $department->DepartmentId) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>