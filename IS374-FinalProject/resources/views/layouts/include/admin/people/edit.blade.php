<!-- show specified faculty with a form to edit it -->

@extends("layouts.admin")

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Edit person</h1>
            <p><a href="{{ route('people.index') }}">Return to all people</a></p>
        </div>

        <div class="row">
            <!-- form to edit selected faculty -->
            <form action="{{ route('people.update', $person->PersonId) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label >First name</label>
                    <input type="text" class="form-control" name="FirstName" value="{{ $person->FirstName }}">
                    <label >Last name</label>
                    <input type="text" class="form-control" name="LastName" value="{{ $person->LastName }}">
                    <label >Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $person->email }}">
                    <label >Birthdate</label>
                    <input type="date" class="form-control" name="Birthdate" value="{{ $person->Birthdate }}">
                    <label >Gender</label>
                    <select name="Gender" value="{{ $person->Gender }}">
                        <option value='Male'>Male</option>
                        <option value='Female'>Female</option>
                    </select>
                    <label >Person type</label>
                    <select name="PersonType" value="{{ $person->PersonType }}">
                        <option value='Staff'>Staff</option>
                        <option value='Student'>Student</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
