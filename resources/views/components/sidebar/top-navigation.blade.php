@push('styles')
    <style>
        span.narrow-line-height {
            line-height: 15px !important;
        }
        @media (max-width: 1024px) {
            ul.dropdown-submenu {
                position: relative;
            }
            ul.dropdown-submenu > ul.dropdown-menu {
                top: 0;
                left: 100%;
                margin-top: -6px;
                margin-left: -1px;
            }
            ul.dropdown-submenu:hover > ul.dropdown-menu {
                display: block;
            }
            ul.dropdown-submenu:hover > a:after {
                border-left-color: #fff;
            }
            ul.dropdown-submenu.pull-left {
                float: none;
            }
            ul.dropdown-submenu.pull-left > ul.dropdown-menu {
                left: -100%;
                margin-left: 10px;
            }
        }
    </style>
@endpush

<nav class="navbar navbar-secondary navbar-expand-lg">
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item dropdown @if (Route::is('dashboard.*')) active @endif">
                <a href="#" data-toggle="dropdown" class="nav-link has-dropdown">
                    <i class="fas fa-fire"></i><span>@lang('Dashboard')</span>
                </a>

                <ul class="dropdown-menu">
                    <li class="nav-item @if (Route::is('dashboard.general')) active @endif">
                        <a href="{{ route('dashboard.general') }}" class="nav-link">
                            <span>@lang('General Dashboard')</span>
                        </a>
                    </li>

                    <li class="nav-item @if (Route::is('dashboard.ecommerce')) active @endif">
                        <a href="{{ route('dashboard.ecommerce') }}" class="nav-link">
                            <span>@lang('Ecommerce Dashboard')</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item @if (Route::is('layout.top-navigation')) active @endif">
                <a href="{{ route('layout.top-navigation') }}" class="nav-link">
                    <i class="far fa-heart"></i><span>@lang('Top Navigation')</span>
                </a>
            </li>

            <li class="nav-item dropdown">
                <a href="#" data-toggle="dropdown" class="nav-link has-dropdown">
                    <i class="far fa-clone"></i><span>@lang('Multiple Dropdown')</span>
                </a>

                <ul class="dropdown-menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span>@lang('Not Dropdown Link')</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link has-dropdown">
                            <span>@lang('Hover Me')</span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-mobile" data-dropdown-menu-mobile-class="dropdown-submenu">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <span>@lang('Link')</span>
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link has-dropdown">
                                    <span>@lang('Link 2')</span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-mobile" data-dropdown-menu-mobile-class="dropdown-submenu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <span>@lang('Link')</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <span>@lang('Link')</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <span>@lang('Link')</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <span>@lang('Link 3')</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
