@extends('layouts.admin')

@section('title', 'Modules › Owl Carousel')

@section('pre-style')
    <link rel="stylesheet" href="{{ asset('node_modules/owl.carousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/owl.carousel/dist/assets/owl.theme.default.min.css') }}">
@endsection

@section('pre-script')
    <script src="{{ asset('node_modules/owl.carousel/dist/owl.carousel.min.js') }}"></script>
@endsection

@section('script')
    <script src="{{ mix('js/page/modules-slider.js') }}"></script>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@lang('Owl Carousel')</h1>

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
                    <a href="{{ route('modules.owl-carousel') }}">
                        <span>@lang('Owl Carousel')</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Owl Carousel</h2>
            <p class="section-lead">Display multiple images alternately within a few seconds.</p>

            <div class="row">
                <div class="col-12 col-sm-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Sliders</h4>
                        </div>
                        <div class="card-body">
                            <div class="owl-carousel owl-theme slider" id="slider1">
                                <div><img alt="image" src="{{ asset('img/news/img01.jpg') }}"></div>
                                <div><img alt="image" src="{{ asset('img/news/img08.jpg') }}"></div>
                                <div><img alt="image" src="{{ asset('img/news/img10.jpg') }}"></div>
                                <div><img alt="image" src="{{ asset('img/news/img09.jpg') }}"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Sliders (Caption)</h4>
                        </div>
                        <div class="card-body">
                            <div class="owl-carousel owl-theme slider" id="slider2">
                                <div><img alt="image" src="{{ asset('img/news/img01.jpg') }}">
                                    <div class="slider-caption">
                                        <div class="slider-title">Image 1</div>
                                        <div class="slider-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</div>
                                    </div>
                                </div>
                                <div><img alt="image" src="{{ asset('img/news/img08.jpg') }}">
                                    <div class="slider-caption">
                                        <div class="slider-title">Image 2</div>
                                        <div class="slider-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</div>
                                    </div>
                                </div>
                                <div><img alt="image" src="{{ asset('img/news/img10.jpg') }}">
                                    <div class="slider-caption">
                                        <div class="slider-title">Image 3</div>
                                        <div class="slider-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</div>
                                    </div>
                                </div>
                                <div><img alt="image" src="{{ asset('img/news/img09.jpg') }}">
                                    <div class="slider-caption">
                                        <div class="slider-title">Image 4</div>
                                        <div class="slider-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
