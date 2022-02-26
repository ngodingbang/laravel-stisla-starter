@extends('layouts.master')

@section('title', __('Forgot Your Password?'))

@section('content')
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-1 col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                    <div class="login-brand">
                        <img src="{{ asset('img/logo.png') }}" alt="logo" width="100" class="shadow-light rounded-circle">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>@lang('Forgot Your Password?')</h4>
                        </div>

                        <div class="card-body">
                            <p class="text-muted">
                                @lang('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.')
                            </p>

                            <x-auth-session-status class="mb-4" :status="session('status')" />
                            {{-- <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" /> --}}

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="email">@lang('Email')<span class="text-danger">*</span></label>

                                    <input type="email"
                                        name="email"
                                        id="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}"
                                        tabindex="1"
                                        required
                                        autofocus>

                                    <x-invalid-feedback :name="'email'"/>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        @lang('Email Password Reset Link')
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="mt-5 text-center text-muted">
                        @lang('Already registered?') <a href="{{ route('login') }}">@lang('Login')</a>
                    </div>

                    @include('components.footer')
                </div>
            </div>
        </div>
    </section>
@endsection
