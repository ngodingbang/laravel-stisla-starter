@if (config('setting.layout', 'default') === 'transparent')
    @section('masterBodyClass', 'layout-2')
@elseif (config('setting.layout', 'default') === 'top-navigation')
    @section('masterBodyClass', 'layout-3')
@endif

@component('layouts.master')
    <div class="main-wrapper @if (config('setting.layout', 'default') === 'top-navigation') container @endif">
        <div class="navbar-bg"></div>

        @include('components.header.' . config('setting.layout', 'default'))

        @include('components.sidebar.' . config('setting.layout', 'default'))

        <div class="main-content">
            @includeWhen($alert = session('alert'), 'components.alert-dismissible', compact('alert'))

            @isset($slot)
                {{ $slot }}
            @else
                @hasSection ('content')
                    @yield('content')
                @endif
            @endisset
        </div>

        @include('components.main-footer')
    </div>
@endcomponent
