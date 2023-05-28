<!-- show all fetched faculties -->

@extends("layouts.admin")

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>All Faculties</h1>
            <p><a href="{{ route('faculties.create') }}">Create a new Faculty</a></p>
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
                        <th>Faculty Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($faculties as $faculty)
                        <tr>
                            <td>{{ $faculty->Name }}</td>
                            <td>
                                <a href="{{ route('faculties.show', $faculty->FacultyId) }}">Show</a>
                                <a href="{{ route('faculties.edit', $faculty->FacultyId) }}">Edit</a>
                                <form action="{{ route('faculties.destroy', $faculty->FacultyId) }}" method="POST">
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
