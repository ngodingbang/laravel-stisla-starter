@extends('layouts.master')

@section('title', __('Register'))

@section('pre-style')
    <link rel="stylesheet" href="{{ asset('node_modules/select2/dist/css/select2.min.css') }}">
@endsection

@section('script')
    <script src="{{ asset('node_modules/select2/dist/js/select2.full.min.js') }}"></script>

    <script>
        $(function () {
            $('.select2').select2();

            @include('components.select2-change', ['olds' => Arr::except(old(), '_token')])
        });
    </script>
@endsection

@section('content')
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                    <div class="login-brand">
                        <img src="{{ asset('img/logo.png') }}" alt="logo" width="100" class="shadow-light rounded-circle">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>@lang('Register')</h4>
                        </div>

                        <div class="card-body">
                            <form action="{{ route('register') }}" method="post">
                                @csrf

                                <div class="section-title mt-0">@lang('menu.profile')</div>

                                <div class="row">
                                    {{-- username --}}
                                    <div class="form-group col-lg-6 col-12">
                                        <label for="username">@lang('Username')<span class="text-danger">*</span></label>

                                        <input type="text"
                                            name="username"
                                            id="username"
                                            class="form-control @error('username') is-invalid @enderror"
                                            value="{{ old('username') }}"
                                            required
                                            tabindex="1"
                                            autofocus
                                            autocomplete="on">

                                        <x-invalid-feedback :name="'username'"/>
                                    </div>
                                    {{-- /.username --}}

                                    {{-- name --}}
                                    <div class="form-group col-lg-6 col-12">
                                        <label for="name">@lang('Name')<span class="text-danger">*</span></label>

                                        <input type="text"
                                            name="name"
                                            id="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            value="{{ old('name') }}"
                                            required
                                            tabindex="2"
                                            autocomplete="on">

                                        <x-invalid-feedback :name="'name'"/>
                                    </div>
                                    {{-- /.name --}}

                                    {{-- email --}}
                                    <div class="form-group col-lg-6 col-12">
                                        <label for="email">@lang('Email')<span class="text-danger">*</span></label>

                                        <input type="email"
                                            name="email"
                                            id="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            value="{{ old('email') }}"
                                            required
                                            tabindex="4"
                                            autocomplete="on">

                                        <x-invalid-feedback :name="'email'"/>
                                    </div>
                                    {{-- /.email --}}

                                    <div class="col-lg-6 col-12"></div>

                                    {{-- password --}}
                                    <div class="form-group col-lg-6 col-12">
                                        <label for="password">@lang('Password')<span class="text-danger">*</span></label>

                                        <input type="password"
                                            name="password"
                                            id="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            required
                                            tabindex="5">

                                        <x-invalid-feedback :name="'password'"/>
                                    </div>
                                    {{-- /.password --}}

                                    {{-- password_confirmation --}}
                                    <div class="form-group col-lg-6 col-12">
                                        <label for="password_confirmation">@lang('Confirm Password')<span class="text-danger">*</span></label>

                                        <input type="password"
                                            name="password_confirmation"
                                            id="password_confirmation"
                                            class="form-control @error('password_confirmation') is-invalid @enderror"
                                            required
                                            tabindex="6">

                                        <x-invalid-feedback :name="'password_confirmation'"/>
                                    </div>
                                    {{-- /.password_confirmation --}}
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox"
                                            name="agree_with_terms"
                                            id="agree_with_terms"
                                            class="custom-control-input @error('agree_with_terms') is-invalid @enderror"
                                            value="1"
                                            @if (old('agree_with_terms', false)) checked @endif
                                            required
                                            tabindex="9">

                                        <label class="custom-control-label" for="agree_with_terms">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a href="#">' . __('Terms of Service') . '</a>',
                                                'privacy_policy' => '<a href="#">' . __('Privacy Policy') . '</a>',
                                            ]) !!}<span class="text-danger">*</span>
                                        </label>

                                        <x-invalid-feedback :name="'agree_with_terms'"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="9">
                                        @lang('Register')
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="mt-5 text-center text-muted">
                        @lang('Already registered?') <a href="{{ route('login') }}">@lang('Login')</a>
                    </div>

                    @include('components.simple-footer')
                </div>
            </div>
        </div>
    </section>
@endsection
