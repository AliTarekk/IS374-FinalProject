<!-- show all fetched faculties -->

@extends("layouts.admin")

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>All staff</h1>
            <p><a href="{{ route('staff.create') }}">Create a new staff</a></p>
        </div>
    </div>

    <!-- display status message -->
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <!-- display faculties -->
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>PayRate</th>
                        <th>Salary</th>
                        <th>PersonId</th>
                        <th>Title</th>
                        <th>EmploymentType</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($staff as $staff)
                        <tr>
                            <td>{{ $staff->PayRate }}</td>
                            <td>{{ $staff->Salary }}</td>
                            <td>{{ $staff->PersonId }}</td>
                            <td>{{ $staff->Title }}</td>
                            <td>{{ $staff->EmploymentType }}</td>

                            <td>
                                <a href="{{ route('staff.show', $staff->StaffId) }}">Show</a>
                                <a href="{{ route('staff.edit', $staff->StaffId) }}">Edit</a>
                                <form action="{{ route('staff.destroy', $staff->StaffId) }}" method="POST">
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
@endsection
