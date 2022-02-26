<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@hasSection('title') @yield('title') &mdash; @endif{{ config('app.name') }}</title>

    {{-- General CSS Files --}}
    <link rel="stylesheet" href="{{ mix('css/stisla/master.css') }}">
    <link rel="icon" href="{{ asset('img/logo.png') }}">

    {{-- Template CSS --}}
    @yield('pre-style')
    <link rel="stylesheet" href="{{ mix('css/stisla/style.css') }}">
    <link rel="stylesheet" href="{{ mix('css/stisla/components.css') }}">
    @yield('style')
    @stack('styles')
</head>

<body @hasSection('masterBodyClass') class="@yield('masterBodyClass')" @endif>
    <main id="app">
        @isset($slot)
            {{ $slot }}
        @else
            @hasSection ('content')
                @yield('content')
            @endif
        @endisset
    </main>

    {{-- Script --}}
    <script src="{{ mix('js/stisla/master.js') }}"></script>
    <script src="{{ mix('js/stisla/app.js') }}"></script>
    <script src="{{ mix('js/stisla/scripts.js') }}"></script>
    @yield('script')
    @stack('scripts')
</body>
