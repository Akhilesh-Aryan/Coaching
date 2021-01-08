@extends('homepage.base')
@section('title')
This is insertpage of students
@endsection
@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('applyStore')}}"method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="contact">Contact</label>
                            <input type="text" class="form-control" name="contact" value="{{old('contact')}}">
                            @error('contact')
                            <span class="text-danger small">{{$message}}</span>
                        @enderror
                        </div>
                        <div class="mb-3">
                            <label for="school">School</label>
                            <input type="text" class="form-control" name="school" value="{{old('school')}}">
                            @error('school')
                            <span class="text-danger small">{{$message}}</span>
                        @enderror
                        </div>

                        <div class="mb-3">
                            <label for="gender">Gender</label>
                           <select class="form-control" name="gender">
                               <option disabled selected >---Select---</option>
                               <option value="Male">Male</option>
                               <option value="Female">Female</option>
                           </select>
                            @error('gender')
                            <span class="text-danger small">{{$message}}</span>
                        @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nationality">Nationality</label>
                            <input type="text" class="form-control" name="nationality" value="{{old('nationality')}}">
                            @error('nationality')
                            <span class="text-danger small">{{$message}}</span>
                        @enderror
                        </div>
                        <div class="mb-3">
                            <label for="dob">dob</label>
                            <input type="date" class="form-control" name="dob" value="{{old('dob')}}">
                            @error('dob')
                            <span class="text-danger small">{{$message}}</span>
                        @enderror
                        </div>
                        <div class="mb-3">
                            <label for="dp">Photo</label>
                            <input type="file" class="form-control" name="dp" value="">
                            @error('dp')
                            <span class="text-danger small">{{$message}}</span>
                        @enderror
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="form-control btn btn-outline-success w-100" name="post">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
