@extends('layouts.app');

@section('content')
    <div class="container">
        <h2>Register Page</h2>
        <div class="row">
            <div class="col-8 m-auto">
                <div class="card rounded p-4">
                    <div class="card-title">
                        <h4>Registration From</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('register.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-lable">
                                    Name
                                </label>
                                <input class="form-control @error('name') is-invalid @enderror" type="text"
                                    name="name" id="" placeholder="Enter Your Name">


                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-lable">
                                    Email
                                </label>
                                <input class="form-control @error('email') is-invalid @enderror" type="email"
                                    name="email" id="" placeholder="Enter Your Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-lable">
                                    Phone
                                </label>
                                <input class="form-control @error('email') is-invalid @enderror" type="tel"
                                    name="phone" id="" placeholder="Enter Your Phone">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-lable">
                                    Password
                                </label>
                                <input
                                    class="form-control @error('password')
                                    is-invalid
                                    @enderror"
                                    type="password" name="password" id="" placeholder="Enter Your Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-lable">
                                    Confirm Password
                                </label>
                                <input class="form-control" type="password" name="password_confirmation" id="">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
