<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard.ecommerce') }}">{{ config('app.name') }}</a>
        </div>

        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard.ecommerce') }}">{{ config('app.shortname') }}</a>
        </div>

        <ul class="sidebar-menu">
            <li class="menu-header">
                <span>@lang('menu.dashboard')</span>
            </li>

            <li class="nav-item dropdown @if (Route::is('dashboard.*')) active @endif">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas @lang('icon.dashboard')"></i><span>@lang('menu.dashboard')</span>
                </a>

                <ul class="dropdown-menu">
                    <li @if (Route::is('dashboard.general')) class="active" @endif>
                        <a class="nav-link" href="{{ route('dashboard.general') }}">
                            <span>General @lang('menu.dashboard')</span>
                        </a>
                    </li>

                    <li @if (Route::is('dashboard.ecommerce')) class="active" @endif>
                        <a class="nav-link" href="{{ route('dashboard.ecommerce') }}">
                            <span>Ecommerce @lang('menu.dashboard')</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
