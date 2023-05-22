<!-- show all fetched faculties -->

<div class="row">
    <div class="col-12">
        <h1>All sections</h1>
        <p><a href="{{ route('sections.create') }}">Create a new section</a></p>
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
                    <th>section</th>
                    <th>maxCapacity</th>
                    <th>period</th>
                    <th>day</th>
                    <th></th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sections as $section)
                    <tr>
                        <td>{{ $section->SectionId }}</td>
                        <td>{{ $section->MaxStudent }}</td>
                        <td>{{ $section->Period }}</td>
                        <td>{{ $section->Day }}</td>
                        <td>
                            <a href="{{ route('sections.show', $section->SectionId) }}">Show</a>
                            <a href="{{ route('sections.edit', $section->SectionId) }}">Edit</a>
                            <form action="{{ route('sections.destroy', $section->SectionId) }}" method="POST">
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