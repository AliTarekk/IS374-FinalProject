<!-- form to create new faculty -->

@extends("layouts.admin")

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Create a new staff</h1>
            <p><a href="{{ route('staff.index') }}">Return to all staff</a></p>
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
            <form action="{{ route('staff.store') }}" method="POST">
                @csrf
                <div class="form-group">
                <label >PayRate</label>
                    <input type="decimal" class="form-control" name="PayRate" >
                    <label >Salary</label>
                    <input type="decimal" class="form-control" name="Salary" >
                    <label >PersonId</label>
                    <input type="number" class="form-control" name="PersonId" >

                <label >Title</label>
                    <select name="Title">
                        <option value='Instructor'>Instructor</option>
                        <option value='Professor'>Professor</option>
                        <option value='AssistantProfessor'>AssistantProfessor</option>
                        <option value='AssociateProfessor'>AssociateProfessor</option>
                    </select>
                    <label >EmploymentType </label>
                    <select name="EmploymentType">
                        <option value='FullTime'>FullTime</option>
                        <option value='PartTime'>PartTime</option>
                    </select>
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
