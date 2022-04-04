@extends('layouts.admin')

@section('title', 'Bootstrap Components › Breadcrumb')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@lang('Breadcrumb')</h1>

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
                    <a href="{{ route('bootstrap.breadcrumb') }}">
                        <span>@lang('Breadcrumb')</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Breadcrumb</h2>
            <p class="section-lead">
                Indicate the current page’s location within a navigational hierarchy that automatically adds separators via CSS.
            </p>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Default</h4>
                        </div>
                        <div class="card-body">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                                </ol>
                            </nav>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>Icon</h4>
                        </div>
                        <div class="card-body">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active"><i class="fas fa-tachometer-alt"></i> Home</li>
                                </ol>
                            </nav>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-tachometer-alt"></i> Home</a></li>
                                    <li class="breadcrumb-item"><a href="#"><i class="far fa-file"></i> Library</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Data</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Background</h4>
                        </div>
                        <div class="card-body">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb bg-primary text-white-all">
                                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-tachometer-alt"></i> Home</a></li>
                                    <li class="breadcrumb-item"><a href="#"><i class="far fa-file"></i> Library</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Data</li>
                                </ol>
                            </nav>

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb bg-warning text-white-all">
                                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-tachometer-alt"></i> Home</a></li>
                                    <li class="breadcrumb-item"><a href="#"><i class="far fa-file"></i> Library</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Data</li>
                                </ol>
                            </nav>

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb bg-success text-white-all">
                                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-tachometer-alt"></i> Home</a></li>
                                    <li class="breadcrumb-item"><a href="#"><i class="far fa-file"></i> Library</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Data</li>
                                </ol>
                            </nav>

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb bg-danger text-white-all">
                                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-tachometer-alt"></i> Home</a></li>
                                    <li class="breadcrumb-item"><a href="#"><i class="far fa-file"></i> Library</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Data</li>
                                </ol>
                            </nav>

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb bg-secondary text-white-all">
                                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-tachometer-alt"></i> Home</a></li>
                                    <li class="breadcrumb-item"><a href="#"><i class="far fa-file"></i> Library</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Data</li>
                                </ol>
                            </nav>

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb bg-dark text-white-all">
                                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-tachometer-alt"></i> Home</a></li>
                                    <li class="breadcrumb-item"><a href="#"><i class="far fa-file"></i> Library</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Data</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
