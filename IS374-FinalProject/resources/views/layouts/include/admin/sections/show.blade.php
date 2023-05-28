<!-- show specified faculty and buttons to update or delete it -->

@extends("layouts.admin")

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Section Details</h1>
                <p><a href="{{ route('sections.index') }}">Back to all sections</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>{{ $section->SectionId }}</h2>
                <p>section ID: {{ $section->SectionId }}</p>
                <p>section maxcapacity: {{ $section->MaxStudent }}</p>
                <p>section period: {{ $section->Period }}</p>
                <p>section day: {{ $section->Day }}</p>
                <p>Created at: {{ $section->created_at }}</p>
                <p>Updated at: {{ $section->updated_at }}</p>
                <p>
                    <a href="{{ route('sections.edit', ['section' => $section]) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('sections.destroy', ['section' => $section]) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </p>
            </div>
        </div>
    </div>
@endsection
