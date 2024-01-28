@extends('layouts.guest')
@section('main')
<div class="vh-100">
    <div class="row h-100 g-0">
        <div id="login" class="col bg-white">
            <div class="d-flex justify-content-center align-items-center h-100 position-relative">
                <img src="/images/svglogo.svg" alt="tahanina logo" class="m-4 logo add-pointer position-absolute top-0 start-0 " onclick="location.href='{{ url('login') }}'">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="w-100 m-2" style="max-width: 380px;">
                        <form method="POST" role="form" action="{{ route('login') }}">
                            @csrf
                            <h1 class="fw-bold text-capitalize text-center pb-4"> Log in </h1>
                            <div class="mb-3">
                                <input type="email" class="form-control rounded-3 shadow-none @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}">
                                <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                            </div>

                            <div class="mb-3">
                                <input type="password" class="form-control rounded-3 shadow-none @error('password') is-invalid @enderror" name="password" placeholder="Password">
                                <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                            </div>

                            @php
                            $url = \Session::get('url');
                            $intended = $url && isset($url['intended']) ? $url['intended'] : '';
                            $deleteAccount = strpos($intended, 'account/forget/confirm') !== false;
                            @endphp

                            <div class="mb-4 pb-2 d-md-flex justify-content-between align-items-center">
                                <div class="form-check form-switch d-flex align-items-end justify-content-center">
                                    @if (!$deleteAccount)
                                    <input class="form-check-input border-0 shadow-none" type="checkbox" id="remember-login" name="remember">
                                    <label for="remember-login" class="form-check-label ms-2 d-inline">
                                        {{ __('Remember me') }}
                                    </label>
                                    @endif
                                </div>

                                <div class="text-center">
                                    @if (!$deleteAccount)
                                    <a href="{{ route('password.request') }}" class="link-dark border-bottom border-dark">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                    @endif
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-outline-dark rounded-pill px-5 border-2 fw-bold mx-auto shadow-none">
                                    @if ($deleteAccount)
                                    Deleted user
                                    @else
                                    {{ __('Log in') }}
                                    @endif
                                </button>
                                <div class="mt-3">
                                    @if (!$deleteAccount)
                                    No account yet?
                                    <a href="{{ route('register') }}" class="link-dark border-bottom border-dark">
                                        {{ __('Register') }}
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @include('auth.marketing')
    </div>
    @stop