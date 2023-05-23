<!-- show all fetched faculties -->

<div class="row">
    <div class="col-12">
        <h1>All people</h1>
        <p><a href="{{ route('people.create') }}">Create a new people</a></p>
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
                    <th>first</th>
                    <th>last</th>
                    <th>email</th>
                    <th>birthdate</th>
                    <th>gender</th>
                    <th>person type</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($people as $person)
                    <tr>
                        <td>{{ $person->FirstName }}</td>
                        <td>{{ $person->LastName }}</td>
                        <td>{{ $person->email }}</td>
                        <td>{{ $person->Birthdate }}</td>
                        <td>{{ $person->Gender }}</td>
                        <td>{{ $person->PersonType }}</td>
                        <td>
                            <a href="{{ route('people.show', $person->PersonId) }}">Show</a>
                            <a href="{{ route('people.edit', $person->PersonId) }}">Edit</a>
                            <form action="{{ route('people.destroy', $person->PersonId) }}" method="POST">
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