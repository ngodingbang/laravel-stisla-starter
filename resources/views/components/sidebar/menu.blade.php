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

    <li @if (Route::is('blank-page')) class="active" @endif>
        <a class="nav-link" href="{{ route('blank-page') }}">
            <i class="far fa-square"></i> <span>@lang('Blank Page')</span>
        </a>
    </li>

    <li class="nav-item dropdown @if (Route::is('bootstrap.*')) active @endif">
        <a href="#" class="nav-link has-dropdown">
            <i class="fas fa-th"></i> <span>@lang('Bootstrap')</span>
        </a>

        <ul class="dropdown-menu">
            <li @if (Route::is('bootstrap.alert')) class="active" @endif>
                <a class="nav-link" href="{{ route('bootstrap.alert') }}">
                    <span>@lang('Alert')</span>
                </a>
            </li>

            <li @if (Route::is('bootstrap.badge')) class="active" @endif>
                <a class="nav-link" href="{{ route('bootstrap.badge') }}">
                    <span>@lang('Badge')</span>
                </a>
            </li>

            <li @if (Route::is('bootstrap.breadcrumb')) class="active" @endif>
                <a class="nav-link" href="{{ route('bootstrap.breadcrumb') }}">
                    <span>@lang('Breadcrumb')</span>
                </a>
            </li>

            <li @if (Route::is('bootstrap.buttons')) class="active" @endif>
                <a class="nav-link" href="{{ route('bootstrap.buttons') }}">
                    <span>@lang('Buttons')</span>
                </a>
            </li>

            <li @if (Route::is('bootstrap.card')) class="active" @endif>
                <a class="nav-link" href="{{ route('bootstrap.card') }}">
                    <span>@lang('Card')</span>
                </a>
            </li>

            <li @if (Route::is('bootstrap.carousel')) class="active" @endif>
                <a class="nav-link" href="{{ route('bootstrap.carousel') }}">
                    <span>@lang('Carousel')</span>
                </a>
            </li>

            <li @if (Route::is('bootstrap.collapse')) class="active" @endif>
                <a class="nav-link" href="{{ route('bootstrap.collapse') }}">
                    <span>@lang('Collapse')</span>
                </a>
            </li>

            <li @if (Route::is('bootstrap.dropdown')) class="active" @endif>
                <a class="nav-link" href="{{ route('bootstrap.dropdown') }}">
                    <span>@lang('Dropdown')</span>
                </a>
            </li>

            <li @if (Route::is('bootstrap.form')) class="active" @endif>
                <a class="nav-link" href="{{ route('bootstrap.form') }}">
                    <span>@lang('Form')</span>
                </a>
            </li>

            <li @if (Route::is('bootstrap.list-group')) class="active" @endif>
                <a class="nav-link" href="{{ route('bootstrap.list-group') }}">
                    <span>@lang('List Group')</span>
                </a>
            </li>

            <li @if (Route::is('bootstrap.media-object')) class="active" @endif>
                <a class="nav-link" href="{{ route('bootstrap.media-object') }}">
                    <span>@lang('Media Object')</span>
                </a>
            </li>

            <li @if (Route::is('bootstrap.modal')) class="active" @endif>
                <a class="nav-link" href="{{ route('bootstrap.modal') }}">
                    <span>@lang('Modal')</span>
                </a>
            </li>

            <li @if (Route::is('bootstrap.nav')) class="active" @endif>
                <a class="nav-link" href="{{ route('bootstrap.nav') }}">
                    <span>@lang('Nav')</span>
                </a>
            </li>

            <li @if (Route::is('bootstrap.navbar')) class="active" @endif>
                <a class="nav-link" href="{{ route('bootstrap.navbar') }}">
                    <span>@lang('Navbar')</span>
                </a>
            </li>

            <li @if (Route::is('bootstrap.pagination')) class="active" @endif>
                <a class="nav-link" href="{{ route('bootstrap.pagination') }}">
                    <span>@lang('Pagination Page')</span>
                </a>
            </li>

            <li @if (Route::is('bootstrap.popover')) class="active" @endif>
                <a class="nav-link" href="{{ route('bootstrap.popover') }}">
                    <span>@lang('Popover')</span>
                </a>
            </li>

            <li @if (Route::is('bootstrap.progress')) class="active" @endif>
                <a class="nav-link" href="{{ route('bootstrap.progress') }}">
                    <span>@lang('Progress')</span>
                </a>
            </li>

            <li @if (Route::is('bootstrap.table')) class="active" @endif>
                <a class="nav-link" href="{{ route('bootstrap.table') }}">
                    <span>@lang('Table')</span>
                </a>
            </li>

            <li @if (Route::is('bootstrap.tooltip')) class="active" @endif>
                <a class="nav-link" href="{{ route('bootstrap.tooltip') }}">
                    <span>@lang('Tooltip')</span>
                </a>
            </li>

            <li @if (Route::is('bootstrap.typography')) class="active" @endif>
                <a class="nav-link" href="{{ route('bootstrap.typography') }}">
                    <span>@lang('Typography')</span>
                </a>
            </li>
        </ul>
    </li>

    <li class="menu-header">
        <span>@lang('Stisla')</span>
    </li>

    <li class="nav-item dropdown @if (Route::is('forms.*')) active @endif">
        <a href="#" class="nav-link has-dropdown">
            <i class="far fa-file-alt"></i> <span>@lang('Forms')</span>
        </a>

        <ul class="dropdown-menu">
            <li @if (Route::is('forms.advanced-form')) class="active" @endif>
                <a class="nav-link" href="{{ route('forms.advanced-form') }}">
                    <span>@lang('Advanced Form')</span>
                </a>
            </li>

            <li @if (Route::is('forms.editor')) class="active" @endif>
                <a class="nav-link" href="{{ route('forms.editor') }}">
                    <span>@lang('Editor')</span>
                </a>
            </li>

            <li @if (Route::is('forms.validation')) class="active" @endif>
                <a class="nav-link" href="{{ route('forms.validation') }}">
                    <span>@lang('Form Validation')</span>
                </a>
            </li>
        </ul>
    </li>

    <li class="menu-header">
        <span>@lang('Pages')</span>
    </li>

    <li class="nav-item dropdown @if (Route::is('auth-page.*')) active @endif">
        <a href="#" class="nav-link has-dropdown">
            <i class="far fa-user"></i> <span>@lang('Authentication')</span>
        </a>

        <ul class="dropdown-menu">
            <li @if (Route::is('auth-page.forgot-password')) class="active" @endif>
                <a class="nav-link" href="{{ route('auth-page.forgot-password') }}">
                    <span>@lang('Forgot Password')</span>
                </a>
            </li>

            <li @if (Route::is('auth-page.login')) class="active" @endif>
                <a class="nav-link" href="{{ route('auth-page.login') }}">
                    <span>@lang('Login')</span>
                </a>
            </li>

            <li @if (Route::is('auth-page.login-2')) class="active" @endif>
                <a class="nav-link beep beep-sidebar" href="{{ route('auth-page.login-2') }}">
                    <span>@lang('Login 2')</span>
                </a>
            </li>

            <li @if (Route::is('auth-page.register')) class="active" @endif>
                <a class="nav-link" href="{{ route('auth-page.register') }}">
                    <span>@lang('Register')</span>
                </a>
            </li>

            <li @if (Route::is('auth-page.reset-password')) class="active" @endif>
                <a class="nav-link" href="{{ route('auth-page.reset-password', [
                    'token' => Password::createToken(Auth::user()),
                    'email' => Auth::user()->email,
                ]) }}">
                    <span>@lang('Reset Password')</span>
                </a>
            </li>
        </ul>
    </li>

    <li class="nav-item dropdown @if (Route::is('errors.*')) active @endif">
        <a href="#" class="nav-link has-dropdown">
            <i class="fas fa-exclamation"></i> <span>@lang('Errors')</span>
        </a>

        <ul class="dropdown-menu">
            <li @if (Route::is('errors.401')) class="active" @endif>
                <a class="nav-link" href="{{ route('errors.401') }}">
                    <span>401</span>
                </a>
            </li>

            <li @if (Route::is('errors.403')) class="active" @endif>
                <a class="nav-link" href="{{ route('errors.403') }}">
                    <span>403</span>
                </a>
            </li>

            <li @if (Route::is('errors.404')) class="active" @endif>
                <a class="nav-link" href="{{ route('errors.404') }}">
                    <span>404</span>
                </a>
            </li>

            <li @if (Route::is('errors.419')) class="active" @endif>
                <a class="nav-link" href="{{ route('errors.419') }}">
                    <span>419</span>
                </a>
            </li>

            <li @if (Route::is('errors.429')) class="active" @endif>
                <a class="nav-link" href="{{ route('errors.429') }}">
                    <span>429</span>
                </a>
            </li>

            <li @if (Route::is('errors.500')) class="active" @endif>
                <a class="nav-link" href="{{ route('errors.500') }}">
                    <span>500</span>
                </a>
            </li>

            <li @if (Route::is('errors.503')) class="active" @endif>
                <a class="nav-link" href="{{ route('errors.503') }}">
                    <span>503</span>
                </a>
            </li>
        </ul>
    </li>

    <li class="nav-item dropdown @if (Route::is('features.*', 'profile.edit')) active @endif">
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

            <li @if (Route::is('profile.edit')) class="active" @endif>
                <a class="nav-link" href="{{ route('profile.edit') }}">
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

    <li class="nav-item dropdown @if (Route::is('utilities.*')) active @endif">
        <a href="#" class="nav-link has-dropdown">
            <i class="fas fa-ellipsis-h"></i> <span>@lang('Utilities')</span>
        </a>

        <ul class="dropdown-menu">
            <li @if (Route::is('utilities.contact')) class="active" @endif>
                <a class="nav-link" href="{{ route('utilities.contact') }}">
                    <span>@lang('Contact')</span>
                </a>
            </li>

            <li @if (Route::is('utilities.invoice')) class="active" @endif>
                <a class="nav-link" href="{{ route('utilities.invoice') }}">
                    <span>@lang('Invoice')</span>
                </a>
            </li>

            <li @if (Route::is('utilities.subscribe')) class="active" @endif>
                <a class="nav-link" href="{{ route('utilities.subscribe') }}">
                    <span>@lang('Subscribe')</span>
                </a>
            </li>
        </ul>
    </li>

    <li @if (Route::is('credits')) class="active" @endif>
        <a class="nav-link" href="{{ route('credits') }}">
            <i class="fas fa-pencil-ruler"></i> <span>@lang('Credits')</span>
        </a>
    </li>
</ul>
