@extends('layouts.master')

@section('content')
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                    <div class="login-brand">
                        {{ config('app.name') }}
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>@lang('Subscribe Our Newsletters')</h4>
                        </div>

                        <div class="card-body">
                            <form method="POST">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                        </div>
                                        <input id="email" type="email" class="form-control" name="email" autofocus placeholder="Email">
                                    </div>
                                </div>

                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-lg btn-round btn-primary">
                                        Subscribe
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    @include('components.simple-footer')
                </div>
            </div>
        </div>
    </section>
@endsection
