@extends('layouts.admin')

@section('title', 'Bootstrap Components › Nav')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@lang('Nav')</h1>

            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="{{ route('dashboard.ecommerce') }}">
                        <span>@lang('Dashboard')</span>
                    </a>
                </div>

                <div class="breadcrumb-item">
                    <span>@lang('Bootstrap Components')</span>
                </div>

                <div class="breadcrumb-item">
                    <a href="{{ route('bootstrap.nav') }}">
                        <span>@lang('Nav')</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Navs</h2>
            <p class="section-lead">
                Examples for how to use Bootstrap’s included navigation components.
            </p>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Base Nav</h4>
                        </div>
                        <div class="card-body">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#">Disabled</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>Vertical</h4>
                        </div>
                        <div class="card-body">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#">Disabled</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tabs</h4>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#">Disabled</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>Pills</h4>
                        </div>
                        <div class="card-body">
                            <div class="section-title mt-0">Simple</div>
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#">Disabled</a>
                                </li>
                            </ul>
                            <div class="section-title">Icon</div>
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#"><i class="fas fa-home"></i> Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fas fa-user"></i> Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fas fa-cog"></i> Setting</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
