@component('layouts.master')
    <section class="section">
        <div class="container mt-5">
            <div class="page-error">
                <div class="page-inner">
                    <h1>@yield('code', __('Oh no'))</h1>

                    <div class="page-description">
                        @yield('message')
                    </div>

                    <div class="page-search">
                        {{--
                        <form>
                            <div class="form-group floating-addon floating-addon-not-append">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-search"></i>
                                        </div>
                                    </div>

                                    <input type="text" class="form-control" placeholder="Search">

                                    <div class="input-group-append">
                                        <button class="btn btn-primary btn-lg">@lang('Search')</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        --}}

                        <div class="mt-3">
                            <a href="{{ url()->previous() }}">@lang('Go back')</a>
                            |
                            <a href="{{ app('router')->has('home') ? route('home') : url('/') }}">@lang('Go Home')</a>
                        </div>
                    </div>
                </div>
            </div>

            @include('components.footer')
        </div>
    </section>
@endcomponent
