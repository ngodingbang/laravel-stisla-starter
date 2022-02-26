<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard.index') }}">{{ config('app.name') }}</a>
        </div>

        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard.index') }}">{{ config('app.shortname') }}</a>
        </div>

        <ul class="sidebar-menu">
            @can('view-dashboard')
                <li @if (Route::is('dashboard.*')) class="active" @endif>
                    <a href="{{ route('dashboard.index') }}" class="nav-link">
                        <i class="fas @lang('icon.dashboard')"></i> <span>@lang('menu.dashboard')</span>
                    </a>
                </li>
            @endcan
        </ul>
    </aside>
</div>
