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
                            <p class="text-muted">@lang('Verification email has been run successfully.')</p>

                            <a href="{{ route('dashboard.index') }}" class="btn btn-primary">@lang('Go to page :page', ['page' => __('Dashboard')])</a>
                        </div>
                    </div>

                    @include('components.footer')
                </div>
            </div>
        </div>
    </section>
@endsection
