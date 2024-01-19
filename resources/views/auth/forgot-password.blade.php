@extends('layouts.guest')
@section('main')
<div class="vh-100">
    <div class="row h-100 g-0">
        <div id="login" class="col bg-white">
        <div>
        <img src="/images/svglogo.svg" alt="tahanina logo" class="m-4 logo add-pointer" onclick="location.href='{{ url('login') }}'">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="w-100 m-2" style="max-width: 380px;">
                       <!-- Session Status -->
        {{-- <x-auth-session-status class="mb-4" :status="session('status')" /> --}}

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <h1 class="fw-bold text-capitalize text-center pb-4"> Forgot your password?</h1>
                        <p class="text-center mb-4">No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>

                        <div class="mb-4">
                            <input type="email"
                                   class="form-control rounded-3 shadow-none @error('email') is-invalid @enderror"
                                   name="email"
                                   placeholder="Eemail" required autofocus>
                            <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                        </div>

                        <div class="text-center">
                            <button type="submit"
                                    class="btn btn-outline-dark rounded-pill px-5 border-2 fw-bold mx-auto shadow-none">
                                    {{ __('Email Password Reset Link') }}
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        </div>

        @include('auth.marketing')
    </div>
    @stop













{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
