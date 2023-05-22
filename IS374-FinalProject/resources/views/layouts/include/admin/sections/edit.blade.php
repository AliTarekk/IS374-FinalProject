<!-- show specified faculty with a form to edit it -->

<div class="row">
    <div class="col-12">
        <h1>Edit section</h1>
        <p><a href="{{ route('sections.index') }}">Return to all sections</a></p>
    </div>

    <div class="row">
        <!-- form to edit selected faculty -->
        <form action="{{ route('sections.update', $section->SectionId) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label >section id</label>
                <label>"{{ $room->SectionId }}"</label>
                <label >Max capacity</label>
                <input type="number" class="form-control" name="MaxStudent" value="{{ $room->MaxStudent }}">
                <label >Day</label>
                <input type="text" class="form-control" name="day" value="{{ $room->Day }}">
                <label >Period</label>
                <input type="number" class="form-control" name="Period" value="{{ $room->Period }}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>