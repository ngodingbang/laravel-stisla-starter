@extends('layouts.master')

@section('title', __('Reset Password'))

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
                            <h4>@lang('Reset Password')</h4>
                        </div>

                        <div class="card-body">
                            {{-- <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" /> --}}

                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf

                                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                <div class="form-group">
                                    <label for="email">@lang('Email')<span class="text-danger">*</span></label>

                                    <input type="email"
                                        name="email"
                                        id="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email', $request->email) }}"
                                        tabindex="1"
                                        required
                                        autofocus>

                                    <x-invalid-feedback :name="'email'"/>
                                </div>

                                <div class="form-group">
                                    <label for="email">@lang('New Password')<span class="text-danger">*</span></label>

                                    <input type="password"
                                        name="password"
                                        id="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        tabindex="2"
                                        required
                                        autofocus>

                                    <x-invalid-feedback :name="'password'"/>
                                </div>

                                <div class="form-group">
                                    <label for="email">@lang('Confirm Password')<span class="text-danger">*</span></label>

                                    <input type="password"
                                        name="password_confirmation"
                                        id="password_confirmation"
                                        class="form-control @error('password_confirmation') is-invalid @enderror"
                                        tabindex="3"
                                        required
                                        autofocus>

                                    <x-invalid-feedback :name="'password_confirmation'"/>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        @lang('Reset Password')
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    @include('components.footer')
                </div>
            </div>
        </div>
    </section>
@endsection
