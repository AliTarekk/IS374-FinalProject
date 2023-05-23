@extends("layouts.main")

@section("content")
    <div class="text-center m-5">
        <form action="{{route('student.store')}}" method="post">
            @csrf
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Course
                </button>
                <ul class="list-group" name="CourseTitle">
                    @foreach($courses as $course)
                    <li class="list-group-item" name="CourseTitle">
                        <input class="form-check-input me-1" type="radio" name="CourseCode" value="{{$course->CourseCode}}" id="{{$course->CourseCode}}">
                        <label class="form-check-label" for="{{$course->CourseCode}}">{{$course->CourseTitle}}</label>
                    </li>
                    @endforeach
                </ul>
            <div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    <div>
@endsection

