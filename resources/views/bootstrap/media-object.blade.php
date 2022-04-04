@extends('layouts.admin')

@section('title', 'Bootstrap Components › Media Object')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@lang('Media Object')</h1>

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
                    <a href="{{ route('bootstrap.media-object') }}">
                        <span>@lang('Media Object')</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Media Object</h2>
            <p class="section-lead">
                Examples for Bootstrap’s media object to construct highly repetitive components like blog comments, tweets, and the like.
            </p>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Simple</h4>
                        </div>
                        <div class="card-body">
                            <div class="media">
                                <img class="mr-3" src="{{ asset('img/example-image-50.jpg') }}" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0">Media heading</h5>
                                    <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>List</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li class="media">
                                    <img class="mr-3" src="{{ asset('img/example-image-50.jpg') }}" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h5 class="mt-0 mb-1">List-based media object</h5>
                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus oringilla. Donec lacinia congue felis in faucibus.</p>
                                    </div>
                                </li>
                                <li class="media my-4">
                                    <img class="mr-3" src="{{ asset('img/example-image-50.jpg') }}" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h5 class="mt-0 mb-1">List-based media object</h5>
                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus oringilla. Donec lacinia congue felis in faucibus.</p>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="mr-3" src="{{ asset('img/example-image-50.jpg') }}" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h5 class="mt-0 mb-1">List-based media object</h5>
                                        <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus oringilla. Donec lacinia congue felis in faucibus.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Nesting</h4>
                        </div>
                        <div class="card-body">
                            <div class="media">
                                <img class="mr-3" src="{{ asset('img/example-image-50.jpg') }}" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0">Media heading</h5>
                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>

                                    <div class="media mt-3">
                                        <a class="pr-3" href="#">
                                            <img src="{{ asset('img/example-image-50.jpg') }}" alt="Generic placeholder image">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="mt-0">Media heading</h5>
                                            <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>Order</h4>
                        </div>
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">Media object</h5>
                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                </div>
                                <img class="ml-3" src="{{ asset('img/example-image-50.jpg') }}" alt="Generic placeholder image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
