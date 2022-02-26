@extends('layouts.master')

@section('title', __('Verify Email Address'))

@section('content')
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="{{ asset('img/logo.png') }}" alt="logo" width="100" class="shadow-light rounded-circle">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>@lang('Verify Email Address')</h4>
                        </div>

                        <div class="card-body">
                            @if (session('status') === 'verification-link-sent')
                                <div class="alert alert-success">
                                    @lang('A new verification link has been sent to the email address you provided during registration.')
                                </div>
                            @endif

                            <p class="text-muted">
                                @lang('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.')
                            </p>

                            <form method="post">
                                @csrf

                                <div class="form-group">
                                    <button type="submit" formaction="{{ route('verification.send') }}" class="btn btn-primary btn-lg btn-block">
                                        @lang('Resend Verification Email')
                                    </button>

                                    <button type="submit" formaction="{{ route('logout') }}" class="btn btn-danger btn-lg btn-block">
                                        @lang('Logout')
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
