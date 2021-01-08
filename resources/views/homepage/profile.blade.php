@extends('homepage.base')
@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <img src="{{ asset('images/'.$student->dp) }}" class="card-img-top" alt="image">
                <div class="card-body">
                    <h5>Sadique Hussain</h5>
                    <table class="table-bordered table">
                        <tr>
                            <th>Gender</th>
                            <td>{{ $student->gender }}</td>
                        </tr>
                        <tr>
                            <th>Contact</th>
                            <td>{{ $student->contact}}</td>
                        </tr>
                        <tr>
                            <th>DOB</th>
                            <td>{{ $student->dob }}</td>
                        </tr>
                        <tr>
                            <th>Nationality</th>
                            <td>{{ $student->nationality }}</td>
                        </tr>
                        <tr>
                            <th>School</th>
                            <td>{{ $student->school }}</td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="container bg-light">
                <h3 class="display-4">Welcome in student portal</h3>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, consequatur optio distinctio dignissimos eligendi magnam sapiente hic aspernatur cum! Modi pariatur consequuntur deleniti odit voluptatem sunt totam sequi quidem dolorem!</p>
            </div>
        </div>
    </div>
</div>
@endsection
