@extends('layouts.admin')

@section('title', __('Profile'))

@section('pre-style')
    <link rel="stylesheet" href="{{ mix('node_modules/bootstrap-social/bootstrap-social.css') }}">
    <link rel="stylesheet" href="{{ mix('node_modules/summernote/dist/summernote-bs4.css') }}">
@endsection

@section('pre-script')
    <script src="{{ mix('node_modules/summernote/dist/summernote-bs4.js') }}"></script>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@lang('Profile')</h1>

            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item">
                    <a href="{{ route('dashboard.ecommerce') }}">
                        <i class="fas @lang('icon.dashboard')"></i> <span>@lang('menu.dashboard')</span>
                    </a>
                </div>

                <div class="breadcrumb-item">
                    <a href="{{ route('profile.edit') }}">
                        <i class="fas @lang('icon.profile')"></i> <span>@lang('menu.profile')</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Hi, Ujang!</h2>

            <p class="section-lead">
                @lang('Change information about yourself on this page.')
            </p>

            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-5">
                    <div class="card profile-widget">
                        <div class="profile-widget-header">
                            <img alt="image" src="{{ asset('img/avatar/avatar-1.png') }}" class="rounded-circle profile-widget-picture">

                            <div class="profile-widget-items">
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">@lang('Posts')</div>
                                    <div class="profile-widget-item-value">187</div>
                                </div>

                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">@lang('Followers')</div>
                                    <div class="profile-widget-item-value">6,8K</div>
                                </div>

                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">@lang('Following')</div>
                                    <div class="profile-widget-item-value">2,1K</div>
                                </div>
                            </div>
                        </div>

                        <div class="profile-widget-description">
                            <div class="profile-widget-name">
                                Ujang Maman <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> Web Developer</div>
                            </div>

                            Ujang maman is a superhero name in <strong>Indonesia</strong>, especially in my family. He is not a fictional character but an original hero in my family, a hero for his children and for his wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with <b>'John Doe'</b>.
                        </div>

                        <div class="card-footer text-center">
                            <div class="font-weight-bold mb-2">
                                Follow Ujang On
                            </div>

                            <a href="#" class="btn btn-social-icon btn-facebook mr-1">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <a href="#" class="btn btn-social-icon btn-twitter mr-1">
                                <i class="fab fa-twitter"></i>
                            </a>

                            <a href="#" class="btn btn-social-icon btn-github mr-1">
                                <i class="fab fa-github"></i>
                            </a>

                            <a href="#" class="btn btn-social-icon btn-instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-7">
                    <div class="card">
                        <form method="post">
                            @csrf

                            <div class="card-header">
                                <h4>@lang('Edit :resource', ['resource' => __('Profile')])</h4>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    {{-- username --}}
                                    <div class="form-group col-12 col-lg-6">
                                        <label for="username">Username<span class="text-danger">*</span></label>

                                        <input type="text"
                                            name="username"
                                            id="username"
                                            class="form-control @error('username') is-invalid @enderror"
                                            value="{{ old('username', $user->username) }}"
                                            required>

                                        <x-invalid-feedback :name="'username'"/>
                                    </div>
                                    {{-- /.username --}}

                                    {{-- name --}}
                                    <div class="form-group col-12 col-lg-6">
                                        <label for="name">@lang('Name')<span class="text-danger">*</span></label>

                                        <input type="text"
                                            name="name"
                                            id="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            value="{{ old('name', $user->name) }}"
                                            required>

                                        <x-invalid-feedback :name="'name'"/>
                                    </div>
                                    {{-- /.name --}}

                                    {{-- email --}}
                                    <div class="form-group col-12 col-lg-6">
                                        <label for="email">@lang('Email')<span class="text-danger">*</span></label>

                                        <input type="email"
                                            name="email"
                                            id="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            value="{{ old('email', $user->email) }}"
                                            required>

                                        <x-invalid-feedback :name="'email'"/>
                                    </div>
                                    {{-- /.email --}}

                                    <div class="col-12 col-lg-6"></div>

                                    {{-- password --}}
                                    <div class="form-group col-12 col-lg-6">
                                        <label for="password">@lang('Reset Password')</label>

                                        <input type="password"
                                            name="password"
                                            id="password"
                                            class="form-control @error('password') is-invalid @enderror">

                                        <x-invalid-feedback :name="'password'"/>
                                    </div>
                                    {{-- /.password --}}

                                    {{-- password_confirmation --}}
                                    <div class="form-group col-12 col-lg-6">
                                        <label for="password_confirmation">@lang('Confirm Password')</label>

                                        <input type="password"
                                            name="password_confirmation"
                                            id="password_confirmation"
                                            class="form-control @error('password_confirmation') is-invalid @enderror">

                                        <x-invalid-feedback :name="'password_confirmation'"/>
                                    </div>
                                    {{-- /.password_confirmation --}}

                                    {{-- role --}}
                                    <div class="form-group col-12 col-lg-6">
                                        <label for="role">@lang('Role')</label>

                                        <p class="form-control-plaintext">{{ $user->role }}</p>
                                    </div>
                                    {{-- /.role --}}

                                    {{-- email_verified_at --}}
                                    <div class="form-group col-12 col-lg-6">
                                        <label for="email_verified_at">@lang('Verify Email Address')</label>

                                        <p class="form-control-plaintext">
                                            {{ $user->email_verified_at->isoFormat('DD MMMM YYYY HH:mm:ss') }}
                                        </p>
                                    </div>
                                    {{-- /.email_verified_at --}}

                                    {{-- bio --}}
                                    <div class="form-group mb-0 col-12">
                                        <label for="bio">@lang('Bio')</label>

                                        <textarea
                                            name="bio"
                                            id="bio"
                                            class="form-control summernote-simple @error('bio') is-invalid @enderror">{{ old('bio', $user->bio) }}</textarea>

                                        <x-invalid-feedback :name="'bio'"/>
                                    </div>
                                    {{-- /.bio --}}

                                    {{-- is_subscribe_to_newsletter --}}
                                    <div class="form-group col-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox"
                                                name="is_subscribe_to_newsletter"
                                                id="is_subscribe_to_newsletter"
                                                class="custom-control-input @error('is_subscribe_to_newsletter') is-invalid @enderror"
                                                value="1"
                                                @if (old('is_subscribe_to_newsletter', $user->is_subscribe_to_newsletter)) checked="checked" @endif>

                                            <label class="custom-control-label" for="is_subscribe_to_newsletter">@lang('Subscribe to newsletter')</label>

                                            <x-invalid-feedback :name="'is_subscribe_to_newsletter'"/>

                                            <div class="text-muted form-text">
                                                @lang('You will get new information about products, offers and promotions')
                                            </div>
                                        </div>
                                    </div>
                                    {{-- /.is_subscribe_to_newsletter --}}
                                </div>

                                @include('components.form-timestamps', ['model' => $user])
                            </div>

                            <div class="card-footer text-right">
                                <button type="submit"
                                    formaction="{{ route('profile.update') }}"
                                    name="_method" value="PUT"
                                    class="btn btn-primary">
                                    <span>@lang('Save Changes')</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
