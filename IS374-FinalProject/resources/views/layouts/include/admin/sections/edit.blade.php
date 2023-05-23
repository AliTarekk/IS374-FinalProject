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
            <label>section maxstudent</label>
                <input type="number" class="form-control" name="MaxStudent" value="{{ $room->MaxStudent }}">
                <label >Period</label>
                <input type="number" class="form-control" name="Period" value="{{ $room->Period }}">
                <label>section StaffId</label>
                <input type="number" class="form-control" name="StaffId" value="{{ $room->StaffId }}">
                <label>section CourseCode</label>
                <input type="number" class="form-control" name="CourseCode" value="{{ $room->CourseCode }}">
                <label>section RoomNumber</label>
                <input type="number" class="form-control" name="RoomNumber" value="{{ $room->RoomNumber }}">
                <select name="Day" value="{{ $room->Day }}">
                    <option value='Sunday'>Sunday</option>
                    <option value='Monday'>Monday</option>
                    <option value='Tuesday'>Tuesday</option>
                    <option value='Wednesday'>Wednesday</option>
                    <option value='Thursday'>Thursday</option>
                    <option value='Friday'>Friday</option>
                    <option value='Saturday'>Saturday</option>
                </select>
                
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>