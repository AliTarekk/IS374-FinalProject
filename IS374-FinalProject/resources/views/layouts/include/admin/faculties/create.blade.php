<!-- form to create new faculty -->

<div class="row">
    <div class="col-12">
        <h1>Create a new Faculty</h1>
        <p><a href="{{ route('faculties.index') }}">Return to all Faculties</a></p>
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
        <form action="{{ route('faculties.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="Name">Faculty Name</label>
                <input type="text" class="form-control" id="Name" name="Name" placeholder="Enter Faculty Name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>