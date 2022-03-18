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

            <li class="menu-header">
                <span>@lang('Starter')</span>
            </li>

            <li class="nav-item dropdown @if (Route::is('layout.*')) active @endif">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-columns"></i> <span>@lang('Layout')</span>
                </a>

                <ul class="dropdown-menu">
                    <li @if (Route::is('layout.default')) class="active" @endif>
                        <a class="nav-link" href="{{ route('layout.default') }}">
                            <span>@lang('Default Layout')</span>
                        </a>
                    </li>

                    <li @if (Route::is('layout.transparent')) class="active" @endif>
                        <a class="nav-link" href="{{ route('layout.transparent') }}">
                            <span>@lang('Transparent Sidebar')</span>
                        </a>
                    </li>

                    <li @if (Route::is('layout.top-navigation')) class="active" @endif>
                        <a class="nav-link" href="{{ route('layout.top-navigation') }}">
                            <span>@lang('Top Navigation')</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-header">
                <span>@lang('Stisla')</span>
            </li>

            <li class="menu-header">
                <span>@lang('Pages')</span>
            </li>

            <li class="nav-item dropdown @if (Route::is('features.*')) active @endif">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-bicycle"></i> <span>@lang('Features')</span>
                </a>

                <ul class="dropdown-menu">
                    <li @if (Route::is('features.activities')) class="active" @endif>
                        <a class="nav-link" href="{{ route('features.activities') }}">
                            <span>@lang('Activities')</span>
                        </a>
                    </li>

                    <li @if (Route::is('features.post-create')) class="active" @endif>
                        <a class="nav-link" href="{{ route('features.post-create') }}">
                            <span>@lang('Post Create')</span>
                        </a>
                    </li>

                    <li @if (Route::is('features.posts')) class="active" @endif>
                        <a class="nav-link" href="{{ route('features.posts') }}">
                            <span>@lang('Posts')</span>
                        </a>
                    </li>

                    <li @if (Route::is('features.profile')) class="active" @endif>
                        <a class="nav-link" href="{{ route('features.profile') }}">
                            <span>@lang('Profile')</span>
                        </a>
                    </li>

                    <li @if (Route::is('features.settings')) class="active" @endif>
                        <a class="nav-link" href="{{ route('features.settings') }}">
                            <span>@lang('Settings')</span>
                        </a>
                    </li>

                    <li @if (Route::is('features.setting-detail')) class="active" @endif>
                        <a class="nav-link" href="{{ route('features.setting-detail') }}">
                            <span>@lang('Setting Detail')</span>
                        </a>
                    </li>

                    <li @if (Route::is('features.tickets')) class="active" @endif>
                        <a class="nav-link" href="{{ route('features.tickets') }}">
                            <span>@lang('Tickets')</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
