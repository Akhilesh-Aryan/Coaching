@extends('admin.adminbase')
@section('title')
This is | dashboard
@endsection
@section('content')
<div class="container-fluid mt-3">

    <div class="row">
        <div class="col-lg-3">
            <ul class="list-group text-center rounded-0">
                <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action list-group-item-dark">Dashboard</a>
                <a href="{{ route('students') }}" class="list-group-item list-group-item-action">Students</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
               <input type="submit" class="list-group-item list-group-item-action list-group-item-danger" value="Logout">
            </ul>
        </div>

        <div class="col-lg-9">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card bg-info text-white">
                      <div class="card-body">
                        <h3>Total Students</h3>
                        <h6>{{ $students }}</h6>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
