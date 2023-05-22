<!-- form to create new faculty -->

<div class="row">
    <div class="col-12">
        <h1>Create a new Section</h1>
        <p><a href="{{ route('sections.index') }}">Return to all sections</a></p>
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
        <form action="{{ route('sections.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>section Number</label>
                <input type="number" class="form-control" name="MaxStudent" placeholder="Enter maximum capacity">
                <input type="number" class="form-control" name="Period" placeholder="Enter period">
                <input type="text" class="form-control" name="Day" placeholder="Enter day">
                <input type="number" class="form-control" name="Period" placeholder="Enter period">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>