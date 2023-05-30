
@extends("layouts.admin")

@section('content')
    <!--== User Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Student Details</h4>
                        <p>All about students like name, student id, phone, email, country, city and more</p>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>FirstName</th>
                                        <th>PersonType</th>
                                        <th>Gender</th>
                                        <th>Email</th>
                                        <th>GPA</th>
                                        <th>HoursAchieved</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                        <tr>
                                            <td>{{$student->StudentId}}</td>
                                            <td>{{$student->FirstName}}</td>
                                            <td>{{$student->PersonType}}</td>
                                            <td>{{$student->Gender}}</td>
                                            <td>{{$student->email}}</td>
                                            <td>{{$student->GPA}}</td>  
                                            <td>{{$student->HoursAchieved}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
