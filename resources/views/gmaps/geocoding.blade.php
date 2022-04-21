@extends('layouts.admin')

@section('title', 'Google Maps › Geocoding')

@section('pre-script')
    <script src="https://maps.google.com/maps/api/js?key={{ env('GMAPS_API_KEY') }}&sensor=true"></script>
    <script src="{{ asset('node_modules/gmaps/gmaps.min.js') }}"></script>
@endsection

@section('script')
    <script src="{{ mix('js/page/gmaps-geocoding.js') }}"></script>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@lang('Geocoding')</h1>

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
                    <a href="{{ route('gmaps.geocoding') }}">
                        <span>@lang('Geocoding')</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Geocoding</h2>
            <p class="section-lead">
                Here is a simple example using the map, we use the plugin <code>gmaps.js</code> made by <a href="https://github.com/hpneo" target="_blank">@hpneo</a>. You can learn more about this plugin <a href="https://github.com/hpneo/gmaps" target="_blank">here</a>.
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Geocoding</h4>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-4 col-12 col-md-6 col-lg-4">
                                    <form id="search-form">
                                        <div class="input-group">
                                            <input type="text" id="address" class="form-control" placeholder="Enter your address">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary">Search</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="alert alert-info">
                                You can type the destination address in the form above then the marker will appear on the map according to your address.
                            </div>
                            <div id="map" data-height="400"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
