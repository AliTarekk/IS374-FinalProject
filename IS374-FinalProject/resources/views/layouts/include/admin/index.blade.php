<!-- list all links for admin CRUDs -->
@extends('mainn')

@section('cont')
<h1>Admin Dashboard</h1>

<ul>
    <li><a href="{{ route('admin.dashboard') }}">Admin Dashboard</a></li>
    <li><a href="{{ route('faculties.index') }}">Admin Faculties</a></li>
    <li><a href="{{ route('departments.index') }}">Admin Departments</a></li>
    <li><a href="{{ route('courses.index') }}">Admin Courses</a></li>
    <li><a href="{{ route('rooms.index') }}">Admin Rooms</a></li>
    <li><a href="{{ route('sections.index') }}">Admin Sections</a></li>
    <li><a href="{{ route('people.index') }}">Admin People</a></li>
    <li><a href="{{ route('staff.index') }}">Admin Staff</a></li>
</ul>
@endsection
