@extends('layouts.master')

@section('title', __('Login'))

@section('content')
    <section class="section">
        <div class="d-flex flex-wrap align-items-stretch">
            <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                <div class="p-4 m-3">
                    <img src="{{ asset('img/logo.png') }}" alt="logo" width="80" class="shadow-light rounded-circle mb-5 mt-2">

                    <h4 class="text-dark font-weight-normal">@lang('Welcome to') <span class="font-weight-bold">{{ config('app.name') }}</span></h4>

                    @if (session('verifying'))
                        <p class="text-danger">@lang('Please login first before start email verification process.')</p>
                    @else
                        <p class="text-muted">@lang('Before you get started, you must login or register if you don\'t already have an account.')</p>
                    @endif

                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form action="{{ route('login') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="identifier">@lang('Email')/@lang('Username')<span class="text-danger">*</span></label>

                            <input type="text"
                                name="identifier"
                                id="identifier"
                                class="form-control @error('identifier') is-invalid @enderror"
                                value="{{ old('identifier') }}"
                                tabindex="1"
                                required
                                autofocus>

                            <x-invalid-feedback :name="'identifier'"/>
                        </div>

                        <div class="form-group">
                            <label for="password">@lang('Password')<span class="text-danger">*</span></label>

                            <input type="password"
                                name="password"
                                id="password"
                                class="form-control @error('password') is-invalid @enderror"
                                tabindex="2"
                                required>

                            <x-invalid-feedback :name="'password'"/>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox"
                                    name="remember"
                                    id="remember"
                                    class="custom-control-input @error('remember') is-invalid @enderror"
                                    value="1"
                                    @if (old('remember', false)) checked @endif
                                    tabindex="3">

                                <label for="remember" class="custom-control-label">@lang('Remember me')</label>

                                <x-invalid-feedback :name="'remember'"/>
                            </div>
                        </div>

                        <div class="form-group text-right">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="float-left mt-3">
                                    @lang('Forgot your password?')
                                </a>
                            @endif

                            <button type="submit" class="btn btn-primary btn-lg" tabindex="4">
                                @lang('Log in')
                            </button>
                        </div>

                        <div class="mt-5 text-center">
                            @lang('Don\'t have an account?') <a href="{{ route('register') }}">@lang('Create Account')</a>
                        </div>
                    </form>

                    <div class="text-center mt-5 text-small">
                        <div>
                            <a href="https://instagram.com" target="_blank">
                                <i class="fab fa-instagram" style="font-size: 2em;"></i>
                            </a>

                            <a href="https://facebook.com" target="_blank">
                                <i class="fab fa-facebook" style="font-size: 2em;"></i>
                            </a>

                            <a href="https://twitter.com" target="_blank">
                                <i class="fab fa-twitter" style="font-size: 2em;"></i>
                            </a>
                        </div>

                        <div class="mt-2">
                            Copyright &copy; {{ config('app.name') }} 2021. Made with 💙 by Stisla
                        </div>

                        <div class="mt-2">
                            <a href="#">@lang('Privacy Policy')</a>

                            <div class="bullet"></div>

                            <a href="#">@lang('Terms of Service')</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="{{ asset('img/unsplash/login-bg.jpg') }}">
                <div class="absolute-bottom-left index-2">
                    <div class="text-light p-5 pb-2">
                        <div class="mb-5 pb-3">
                            <h1 class="mb-2 display-4 font-weight-bold">{{ greeting() }}</h1>

                            <h5 class="font-weight-normal text-muted-transparent">Bali, Indonesia</h5>
                        </div>

                        Photo by <a class="text-light bb" target="_blank" href="https://unsplash.com/photos/a8lTjWJJgLA">Justin Kauffman</a> on <a class="text-light bb" target="_blank" href="https://unsplash.com">Unsplash</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
