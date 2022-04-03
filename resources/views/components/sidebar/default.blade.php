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

            <li @if (Route::is('blank-page')) class="active" @endif>
                <a class="nav-link" href="{{ route('blank-page') }}">
                    <i class="far fa-square"></i> <span>@lang('Blank Page')</span>
                </a>
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

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>
    </aside>
</div>
