@extends('layouts.admin')

@section('title', 'Components › Multiple Upload')

@section('pre-style')
    <link rel="stylesheet" href="{{ asset('node_modules/dropzone/dist/min/dropzone.min.css') }}">
@endsection

@section('pre-script')
    <script src="{{ asset('node_modules/dropzone/dist/min/dropzone.min.js') }}"></script>
@endsection

@section('script')
    <script src="{{ mix('js/page/components-multiple-upload.js') }}"></script>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@lang('Multiple Upload')</h1>

            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="{{ route('dashboard.ecommerce') }}">
                        <span>@lang('Dashboard')</span>
                    </a>
                </div>

                <div class="breadcrumb-item">
                    <span>@lang('Components')</span>
                </div>

                <div class="breadcrumb-item">
                    <a href="{{ route('components.multiple-upload') }}">
                        <span>@lang('Multiple Upload')</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Multiple Upload</h2>
            <p class="section-lead">
                We use 'Dropzone.js' made by @Dropzone. You can check the full documentation <a href="http://www.dropzonejs.com/">here</a>.
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Multiple Upload</h4>
                        </div>
                        <div class="card-body">
                            <form action="#" class="dropzone" id="mydropzone">
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
