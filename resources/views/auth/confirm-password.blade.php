@extends('layouts.master')

@section('title', __('Confirm Password'))

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
                            <h4>@lang('Confirm Password')</h4>
                        </div>

                        <div class="card-body">
                            <p class="text-muted">
                                @lang('This is a secure area of the application. Please confirm your password before continuing.')
                            </p>

                            {{-- <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" /> --}}

                            <form method="POST" action="{{ route('password.confirm') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="email">@lang('Password')<span class="text-danger">*</span></label>

                                    <input type="password"
                                        name="password"
                                        id="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        tabindex="1"
                                        required
                                        autofocus>

                                    <x-invalid-feedback :name="'password'"/>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        @lang('Confirm')
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    @include('components.simple-footer')
                </div>
            </div>
        </div>
    </section>
@endsection
