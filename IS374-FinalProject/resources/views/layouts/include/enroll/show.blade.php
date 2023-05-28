@extends("layouts.student")

@section("content")
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ session('status') }}
        </div>
    @endif
    <div class="m-5">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">CourseID</th>
                <th scope="col">First Midterm</th>
                <th scope="col">Second Midterm</th>
                <th scope="col">CourseWork</th>
                <th scope="col">Grade</th>
            </tr>
            </thead>
            <tbody>
            @foreach($enrolls as $enroll)
                <tr>
                    <td>{{$enroll->StudentId}}</td>
                    <td>{{$enroll->CourseCode}}</td>
                    <td>{{$enroll->FirstMidterm}}</td>
                    <td>{{$enroll->SecondMidterm}}</td>
                    <td>{{$enroll->CourseWork}}</td>
                    <td>{{$enroll->Grade}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
