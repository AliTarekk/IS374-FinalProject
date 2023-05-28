<!-- show specified faculty and buttons to update or delete it -->

@extends("layouts.admin")

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>staff Details</h1>
                <p><a href="{{ route('staff.index') }}">Back to all staff</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                        <p>{{ $staff->PayRate }}</p>
                            <p>{{ $staff->Salary }}</p>
                            <p>{{ $staff->PersonId }}</p>
                            <p>{{ $staff->Title }}</p>
                            <p>{{ $staff->EmploymentType }}</p>
                                    <p>
                    <a href="{{ route('staff.edit', ['staff' => $staff]) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('staff.destroy', ['staff' => $staff]) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </p>
            </div>
        </div>
    </div>
@endsection
