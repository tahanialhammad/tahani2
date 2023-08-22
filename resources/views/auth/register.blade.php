@extends('layouts.guest')
@section('main')
    <div id="login" class="container-fluid bg-white">
        <div class="row vh-100 p-5">
            <div class="col-lg-6 bg-white">
                <img src="/images/svglogo.svg" alt="logo" class=" logo add-pointer"
                    onclick="location.href='{{ url('login') }}'">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="w-100 m-2" style="max-width: 380px;">
                        <form role="form" method="POST" action="register">
                            @csrf
                            <h1 class="fw-bold text-capitalize text-center pb-4"> {{ __('Register') }}</h1>

                            <div class="mb-3">
                                <input type="text"
                                    class="form-control rounded-3 shadow-none @error('name') is-invalid @enderror"
                                    name="name" placeholder="Name" value="{{ old('name') }}" required autofocus>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <input type="email"
                                    class="form-control rounded-3 shadow-none @error('email') is-invalid @enderror"
                                    name="email" placeholder="Email" value="{{ old('email') }}" required>
                                <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                            </div>

                            <div class="mb-3">
                                <input type="password"
                                    class="form-control rounded-3 shadow-none @error('email') is-invalid @enderror"
                                    name="password" placeholder="Password" required>
                                <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                            </div>

                            <div class="mb-3">
                                <input type="password"
                                    class="form-control rounded-3 shadow-none @error('password_confirmation') is-invalid @enderror"
                                    placeholder="Confirm Password" name="password_confirmation" required>
                                <div class="invalid-feedback">{{ $errors->first('password_confirmation') }}</div>
                            </div>

                            <div class="text-center">
                                <button type="submit" id="register"
                                    class="btn btn-outline-dark rounded-pill px-5 border-2 fw-bold mx-auto shadow-none">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </form>

                        <div class="text-center mt-3">
                            {{ __('Already registered?') }}
                            <a href="{{ route('login') }}"
                                class="link-dark border-bottom border-dark">{{ __('Log in') }}</a>
                        </div>

                    </div>
                </div>
            </div>
            @include('auth.marketing')
        </div>

    </div>
@stop