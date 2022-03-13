<nav class="navbar navbar-expand-lg main-navbar">
    <a href="{{ route('dashboard.ecommerce') }}" class="navbar-brand sidebar-gone-hide">{{ config('app.name') }}</a>

    <div class="navbar-nav">
        <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar">
            <i class="fas fa-bars"></i>
        </a>
    </div>

    <div class="nav-collapse">
        <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
            <i class="fas fa-ellipsis-v"></i>
        </a>

        <ul class="navbar-nav">
            @can('view-dashboard')
                <li class="nav-item @if (Route::is('dashboard.*')) active @endif">
                    <a href="{{ route('dashboard.ecommerce') }}" class="nav-link">
                        <span>@lang('menu.dashboard')</span>
                    </a>
                </li>
            @endcan

            @can('view-master')
                <li class="nav-item @if (Route::is('master.*')) active @endif">
                    <a href="{{ route('master.index') }}" class="nav-link">
                        <span>@lang('menu.master')</span>
                    </a>
                </li>
            @endcan

            @can('viewAny', \App\Models\Setting::class)
                <li class="nav-item @if (Route::is('setting.*')) active @endif">
                    <a href="{{ route('setting.index') }}" class="nav-link">
                        <span>@lang('menu.setting')</span>
                    </a>
                </li>
            @endcan

            @can('view-schedule')
                <li class="nav-item @if (Route::is('schedule.*')) active @endif">
                    <a href="{{ route('schedule.index') }}" class="nav-link">
                        <span>@lang('menu.schedule')</span>
                    </a>
                </li>
            @endcan

            @can('view-mapping')
                <li class="nav-item @if (Route::is('mapping.*')) active @endif">
                    <a href="{{ route('mapping.index') }}" class="nav-link">
                        <span>@lang('menu.mapping')</span>
                    </a>
                </li>
            @endcan
        </ul>
    </div>

    <ul class="navbar-nav navbar-right ml-auto">
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="{{ Auth::user()->profile_image }}" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">{{ Auth::user()->name }}</div>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">
                    <span>🇮🇩 {{ Auth::user()->username }}</span>
                </div>

                <a href="{{ route('profile.edit') }}" class="dropdown-item has-icon @if (Route::is('profile.edit')) active @endif">
                    <i class="fas @lang('icon.profile')"></i> @lang('menu.profile')
                </a>

                <div class="dropdown-divider"></div>

                @if (Auth::check() && Route::has('logout'))
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger" onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class="fas fa-sign-out-alt"></i> @lang('Log Out')
                        </a>
                    </form>
                @endif
            </div>
        </li>
    </ul>
</nav>
