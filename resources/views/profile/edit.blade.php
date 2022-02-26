@extends('layouts.admin')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@lang('Profile Information')</h1>

            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item">
                    <a href="{{ route('profile.edit') }}">
                        <i class="fas @lang('icon.profile')"></i> <span>@lang('menu.profile')</span>
                    </a>
                </div>
            </div>
        </div>

        <form method="post">
            @csrf

            <div class="section-body">
                <div class="card">
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
                        </div>

                        @include('components.form-timestamps', ['model' => $user])
                    </div>

                    <div class="card-footer">
                        <button type="submit"
                            formaction="{{ route('profile.update') }}"
                            name="_method" value="PUT"
                            class="btn btn-primary btn-icon icon-left">
                            <i class="fa fa-save"></i> <span>@lang('Update')</span>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
