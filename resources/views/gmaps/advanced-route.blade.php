@extends('layouts.admin')

@section('title', 'Google Maps › Advanced Route')

@section('pre-script')
    <script src="https://maps.google.com/maps/api/js?key={{ env('GMAPS_API_KEY') }}&sensor=true"></script>
    <script src="{{ asset('node_modules/gmaps/gmaps.min.js') }}"></script>
@endsection

@section('script')
    <script src="{{ mix('js/page/gmaps-advanced-route.js') }}"></script>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@lang('Advanced Route')</h1>

            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="{{ route('dashboard.ecommerce') }}">
                        <span>@lang('Dashboard')</span>
                    </a>
                </div>

                <div class="breadcrumb-item">
                    <span>@lang('Google Maps')</span>
                </div>

                <div class="breadcrumb-item">
                    <a href="{{ route('gmaps.advanced-route') }}">
                        <span>@lang('Advanced Route')</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Advanced Route</h2>
            <p class="section-lead">
                The same as the 'route' example, but in this example it will be a bit cooler. Click the 'Start Travel' button to start seeing magic.
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Advanced Routes</h4>
                        </div>
                        <div class="card-body">
                            <div id="map" data-height="300"></div>
                            <div class="text-center mt-4">
                                <a href="javascript:;" class="btn btn-primary btn-icon icon-left" id="start-travel">
                                    <i class="fas fa-play"></i> Start Travel
                                </a>
                            </div>
                            <div class="mt-4">
                                <ul id="instructions" class="list-unstyled list-unstyled-border"></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
