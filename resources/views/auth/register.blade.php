@extends('auth.components.layout')

@include('auth.components.flash-message')

@section('content')

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="{{ asset('auth/images/img-01.png')}}" alt="IMG">
            </div>

            <form class="login100-form validate-form" method="POST" action="{{ route('registerUser') }}">
                @csrf
                <span class="login100-form-title">
                    User Registration
                </span>

                <div class="wrap-input100 validate-input" data-validate = "Name is required">
                    <input class="input100" type="text" name="name" placeholder="Name" value="{{ old('name') }}">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </span>

                    @error('name')
                        <p class="text-danger fs-6 mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>

                    @error('email')
                        <p class="text-danger fs-6 mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100" type="password" name="password" placeholder="Password" value="{{ old('password') }}">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>

                    @error('password')
                        <p class="text-danger fs-6 mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100" type="password" name="password_confirmation" placeholder="Confirm Password" value="{{ old('password_confirmation') }}">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>

                    @error('password_confirmation')
                        <p class="text-danger fs-6 mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit">
                        Register
                    </button>
                </div>

                <div class="text-center p-t-136">
                    <a class="txt2" href="{{ route('login') }}">
                        Have an Account?
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
