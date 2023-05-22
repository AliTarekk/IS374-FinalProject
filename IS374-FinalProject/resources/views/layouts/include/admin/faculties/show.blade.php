<!-- show specified faculty and buttons to update or delete it -->

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Faculty Details</h1>
            <p><a href="{{ route('faculties.index') }}">Back to all faculties</a></p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h2>{{ $faculty->Name }}</h2>
            <p>Faculty ID: {{ $faculty->FacultyId }}</p>
            <p>Created at: {{ $faculty->created_at }}</p>
            <p>Updated at: {{ $faculty->updated_at }}</p>
            <p>
                <a href="{{ route('faculties.edit', ['faculty' => $faculty]) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('faculties.destroy', ['faculty' => $faculty]) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-danger">
                </form>
            </p>
        </div>
    </div>

</div>