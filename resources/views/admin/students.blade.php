@extends('admin.adminbase')
@section('title')
This id admin |StudentsPage
@endsection
@section('content')
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-lg-3">
            <div class="list-group">
                <a href="{{route('admin.dashboard')}}" class="list-group-item list-group-item-action">Dashboard</a>
                <a href="{{route('students')}}" class="list-group-item list-group-item-action">Students</a>
                <form action="{{route('logout')}}" method="POST">
                    <input type="submit" class="list-group-item list-group-item-action bg-danger text-white"
                        value="Logout">
                    @csrf
                </form>
            </div>
        </div>
        <div class="col-lg-9">
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Gender</th>
                    <th>Nationality</th>
                    <th>DOB</th>
                    <th>School</th>
                    <th>Picture</th>
                </tr>
                @foreach($students as $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->contact }}</td>
                    <td>{{ $value->gender }}</td>
                    <td>{{ $value->nationality }}</td>
                    <td>{{ $value->dob }}</td>
                    <td>{{ $value->school }}</td>
                    <td>{{ $value->dp }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
