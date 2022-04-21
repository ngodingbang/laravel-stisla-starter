@extends('layouts.admin')

@section('title', 'Modules › Calendar')

@section('pre-style')
    <link rel="stylesheet" href="{{ asset('node_modules/fullcalendar/dist/fullcalendar.min.css') }}">
@endsection

@section('pre-script')
    <script src="{{ asset('node_modules/fullcalendar/dist/fullcalendar.min.js') }}"></script>
@endsection

@section('script')
    <script src="{{ mix('js/page/modules-calendar.js') }}"></script>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@lang('Calendar')</h1>

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
                    <a href="{{ route('modules.calendar') }}">
                        <span>@lang('Calendar')</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Calendar</h2>
            <p class="section-lead">
                We use 'Full Calendar' made by @fullcalendar. You can check the full documentation <a href="https://fullcalendar.io/">here</a>.
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Calendar</h4>
                        </div>
                        <div class="card-body">
                            <div class="fc-overflow">
                                <div id="myEvent"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
