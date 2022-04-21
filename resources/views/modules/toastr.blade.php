@extends('layouts.admin')

@section('title', 'Modules › Toastr')

@section('pre-style')
    <link rel="stylesheet" href="{{ asset('node_modules/izitoast/dist/css/iziToast.min.css') }}">
@endsection

@section('pre-script')
    <script src="{{ asset('node_modules/izitoast/dist/js/iziToast.min.js') }}"></script>
@endsection

@section('script')
    <script src="{{ mix('js/page/modules-toastr.js') }}"></script>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@lang('Toastr')</h1>

            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="{{ route('dashboard.ecommerce') }}">
                        <span>@lang('Dashboard')</span>
                    </a>
                </div>

                <div class="breadcrumb-item">
                    <span>@lang('Modules')</span>
                </div>

                <div class="breadcrumb-item">
                    <a href="{{ route('modules.toastr') }}">
                        <span>@lang('Toastr')</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Toastr</h2>
            <p class="section-lead">
                We use 'iziToast' made by @Dolce. You can check the full documentation <a href="https://izitoast.marcelodolza.com/">here</a>.
            </p>
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="mb-2">Info Message</div>
                            <button class="btn btn-primary" id="toastr-1">Launch</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="mb-2">Success Message</div>
                            <button class="btn btn-primary" id="toastr-2">Launch</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="mb-2">Warning Message</div>
                            <button class="btn btn-primary" id="toastr-3">Launch</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="mb-2">Error Message</div>
                            <button class="btn btn-primary" id="toastr-4">Launch</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="mb-2">Toastr Right Bottom</div>
                            <button class="btn btn-primary" id="toastr-5">Launch</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="mb-2">Toastr Center Bottom</div>
                            <button class="btn btn-primary" id="toastr-6">Launch</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="mb-2">Toastr Left Bottom</div>
                            <button class="btn btn-primary" id="toastr-7">Launch</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="mb-2">Toastr Top Center</div>
                            <button class="btn btn-primary" id="toastr-8">Launch</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
