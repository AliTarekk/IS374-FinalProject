<!-- show specified faculty with a form to edit it -->

@extends("layouts.admin")

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Edit person</h1>
            <p><a href="{{ route('staff.index') }}">Return to all people</a></p>
        </div>

        <div class="row">
            <!-- form to edit selected faculty -->
            <form action="{{ route('staff.update', $staff->StaffId) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">

                    <label >PayRate</label>
                    <input type="decimal" class="form-control" name="PayRate" value="{{ $staff->PayRate }}">
                    <label >Salary</label>
                    <input type="decimal" class="form-control" name="Salary" value="{{ $staff->Salary }}">
                    <label >PersonId</label>
                    <input type="number" class="form-control" name="PersonId" value="{{ $staff->PersonId }}">
                    <label >Title</label>
                    <select name="Title" value="{{ $staff->Title }}">
                        <option value='Instructor'>Instructor</option>
                        <option value='Professor'>Professor</option>
                        <option value='AssistantProfessor'>AssistantProfessor</option>
                        <option value='AssociateProfessor'>AssociateProfessor</option>
                    </select>
                    <label >EmploymentType </label>
                    <select name="EmploymentType" value="{{ $staff->EmploymentType }}">
                        <option value='FullTime'>FullTime</option>
                        <option value='PartTime'>PartTime</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
