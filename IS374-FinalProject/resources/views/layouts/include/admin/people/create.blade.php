<!-- form to create new faculty -->

<div class="row">
    <div class="col-12">
        <h1>Create a new person</h1>
        <p><a href="{{ route('people.index') }}">Return to all people</a></p>
    </div>
</div>

<!-- display errors if any -->
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <!-- display all errors -->
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            <!-- end display all errors -->
        </ul>
    </div>
@endif

<div class="row">
    <div class="col-12">
        <form action="{{ route('people.store') }}" method="POST">
            @csrf
            <div class="form-group">
            <label >First name</label>
                <input type="text" class="form-control" name="FirstName" >
                <label >Last name</label>
                <input type="text" class="form-control" name="LastName" >
                <label >Email</label>
                <input type="email" class="form-control" name="email" >
                <label >Birthdate</label>
                <input type="date" class="form-control" name="Birthdate">
                <label >Gender</label>
                <select name="Gender">
                    <option value='Male'>Male</option>
                    <option value='Female'>Female</option>
                </select>
                <label >Person type</label>
                <select name="PersonType">
                    <option value='Staff'>Staff</option>
                    <option value='Student'>Student</option>
                </select>

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>