<!-- show specified faculty with a form to edit it -->

<div class="row">
    <div class="col-12">
        <h1>Edit Faculty</h1>
        <p><a href="{{ route('faculties.index') }}">Return to all Faculties</a></p>
    </div>

    <div class="row">
        <!-- form to edit selected faculty -->
        <form action="{{ route('faculties.update', $faculty->FacultyId) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="Name">Faculty Name</label>
                <input type="text" class="form-control" id="Name" name="Name" value="{{ $faculty->Name }}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>