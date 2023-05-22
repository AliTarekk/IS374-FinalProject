<!-- show specified faculty and buttons to update or delete it -->

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>person Details</h1>
            <p><a href="{{ route('people.index') }}">Back to all people</a></p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h2>{{ $person->FirstName }}</h2>
            <p>{{ $person->LastName }}</p>
            <p>{{ $person->email }}</p>
            <p>{{ $person->Birthdate }}</p>
            <p>{{ $person->Gender }}</p>
            <p>{{ $person->PersonType }}</p>
                       <p>
                <a href="{{ route('people.edit', ['person' => $person]) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('people.destroy', ['person' => $person]) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-danger">
                </form>
            </p>
        </div>
    </div>

</div>