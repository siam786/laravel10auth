@extends('layouts.app');
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4 m-auto">
                <div class="card rounded p-4">
                    <div class="card-title">
                        <h2>Login From</h2>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('login.store') }}" method="POST">
                            @csrf
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
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" name="remember" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Remember Me
                                </label>
                              </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
