<?php

use App\Http\Controllers\ProfileController;
use App\Http\Middleware\SetLayoutConfig;
use App\Http\Middleware\UseLayoutDefault;
use App\Http\Middleware\UseLayoutTopNavigation;
use App\Http\Middleware\UseLayoutTransparent;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Stisla Web Routes
|--------------------------------------------------------------------------
|
| Here is the route of Stisla Admin Template that was combined with Laravel
| routing configuration.
|
*/

Route::middleware('auth', 'verified', SetLayoutConfig::class)->group(function () {
    Route::prefix('/dashboard')->name('dashboard.')->group(function () {
        Route::view('/general', 'dashboard.general')->name('general');
        Route::view('/ecommerce', 'dashboard.ecommerce')->name('ecommerce');
    });

    // #region starter
    Route::prefix('/layout')->name('layout.')->group(function () {
        Route::view('/default', 'layout.default')->name('default')->middleware(UseLayoutDefault::class);
        Route::view('/transparent', 'layout.transparent')->name('transparent')->middleware(UseLayoutTransparent::class);
        Route::view('/top-navigation', 'layout.top-navigation')->name('top-navigation')->middleware(UseLayoutTopNavigation::class);
    });

    Route::view('/blank-page', 'blank-page')->name('blank-page');

    Route::prefix('/bootstrap')->name('bootstrap.')->group(function () {
        Route::view('/alert', 'bootstrap.alert')->name('alert');
        Route::view('/badge', 'bootstrap.badge')->name('badge');
        Route::view('/breadcrumb', 'bootstrap.breadcrumb')->name('breadcrumb');
        Route::view('/buttons', 'bootstrap.buttons')->name('buttons');
        Route::view('/card', 'bootstrap.card')->name('card');
        Route::view('/carousel', 'bootstrap.carousel')->name('carousel');
        Route::view('/collapse', 'bootstrap.collapse')->name('collapse');
        Route::view('/dropdown', 'bootstrap.dropdown')->name('dropdown');
        Route::view('/form', 'bootstrap.form')->name('form');
        Route::view('/list-group', 'bootstrap.list-group')->name('list-group');
        Route::view('/media-object', 'bootstrap.media-object')->name('media-object');
        Route::view('/modal', 'bootstrap.modal')->name('modal');
        Route::view('/nav', 'bootstrap.nav')->name('nav');
        Route::view('/navbar', 'bootstrap.navbar')->name('navbar');
        Route::view('/pagination', 'bootstrap.pagination')->name('pagination');
        Route::view('/popover', 'bootstrap.popover')->name('popover');
        Route::view('/progress', 'bootstrap.progress')->name('progress');
        Route::view('/table', 'bootstrap.table')->name('table');
        Route::view('/tooltip', 'bootstrap.tooltip')->name('tooltip');
        Route::view('/typography', 'bootstrap.typography')->name('typography');
    });
    // #endregion starter

    // #region stisla
    Route::prefix('/components')->name('components.')->group(function () {
        Route::view('/article', 'components-page.article')->name('article');
        Route::view('/avatar', 'components-page.avatar')->name('avatar');
        Route::view('/chat-box', 'components-page.chat-box')->name('chat-box');
        Route::view('/empty-state', 'components-page.empty-state')->name('empty-state');
        Route::view('/gallery', 'components-page.gallery')->name('gallery');
        Route::view('/hero', 'components-page.hero')->name('hero');
        Route::view('/multiple-upload', 'components-page.multiple-upload')->name('multiple-upload');
        Route::view('/pricing', 'components-page.pricing')->name('pricing');
        Route::view('/statistic', 'components-page.statistic')->name('statistic');
        Route::view('/tab', 'components-page.tab')->name('tab');
        Route::view('/table', 'components-page.table')->name('table');
        Route::view('/user', 'components-page.user')->name('user');
        Route::view('/wizard', 'components-page.wizard')->name('wizard');
    });

    Route::prefix('/forms')->name('forms.')->group(function () {
        Route::view('/advanced-form', 'forms.advanced-form')->name('advanced-form');
        Route::view('/editor', 'forms.editor')->name('editor');
        Route::view('/validation', 'forms.validation')->name('validation');
    });

    Route::prefix('/gmaps')->name('gmaps.')->group(function () {
        Route::view('/advanced-route', 'gmaps.advanced-route')->name('advanced-route');
        Route::view('/draggable-marker', 'gmaps.draggable-marker')->name('draggable-marker');
        Route::view('/geocoding', 'gmaps.geocoding')->name('geocoding');
        Route::view('/geolocation', 'gmaps.geolocation')->name('geolocation');
        Route::view('/marker', 'gmaps.marker')->name('marker');
        Route::view('/multiple-marker', 'gmaps.multiple-marker')->name('multiple-marker');
        Route::view('/route', 'gmaps.route')->name('route');
        Route::view('/simple', 'gmaps.simple')->name('simple');
    });

    Route::prefix('/modules')->name('modules.')->group(function () {
        Route::view('/calendar', 'modules.calendar')->name('calendar');
        Route::view('/chartjs', 'modules.chartjs')->name('chartjs');
        Route::view('/datatables', 'modules.datatables')->name('datatables');
        Route::view('/flag', 'modules.flag')->name('flag');
        Route::view('/font-awesome', 'modules.font-awesome')->name('font-awesome');
        Route::view('/ion-icons', 'modules.ion-icons')->name('ion-icons');
        Route::view('/owl-carousel', 'modules.owl-carousel')->name('owl-carousel');
        Route::view('/sparkline', 'modules.sparkline')->name('sparkline');
        Route::view('/sweet-alert', 'modules.sweet-alert')->name('sweet-alert');
        Route::view('/toastr', 'modules.toastr')->name('toastr');
        Route::view('/vector-map', 'modules.vector-map')->name('vector-map');
        Route::view('/weather-icon', 'modules.weather-icon')->name('weather-icon');
    });
    // #endregion stisla

    // #region pages
    Route::prefix('/auth-page')->name('auth-page.')->group(function () {
        Route::view('/forgot-password', 'auth.forgot-password')->name('forgot-password');
        Route::view('/login', 'auth.login')->name('login');
        Route::view('/login-2', 'auth.login-2')->name('login-2');
        Route::view('/register', 'auth.register')->name('register');
        Route::view('/reset-password/{token}', 'auth.reset-password', ['request' => request()])->name('reset-password');
    });

    Route::prefix('/errors')->name('errors.')->group(function () {
        Route::get('/401', function () {
            abort(Response::HTTP_UNAUTHORIZED);
        })->name('401');
        Route::get('/403', function () {
            abort(Response::HTTP_FORBIDDEN);
        })->name('403');
        Route::get('/404', function () {
            abort(Response::HTTP_NOT_FOUND);
        })->name('404');
        Route::get('/419', function () {
            abort(419);
        })->name('419');
        Route::get('/429', function () {
            abort(Response::HTTP_TOO_MANY_REQUESTS);
        })->name('429');
        Route::get('/500', function () {
            abort(Response::HTTP_INTERNAL_SERVER_ERROR);
        })->name('500');
        Route::get('/503', function () {
            abort(Response::HTTP_SERVICE_UNAVAILABLE);
        })->name('503');
    });

    Route::prefix('/features')->name('features.')->group(function () {
        Route::view('/activities', 'features.activities')->name('activities');
        Route::view('/post-create', 'features.post-create')->name('post-create');
        Route::view('/posts', 'features.posts')->name('posts');
        Route::view('/settings', 'features.settings')->name('settings');
        Route::view('/setting-detail', 'features.setting-detail')->name('setting-detail');
        Route::view('/tickets', 'features.tickets')->name('tickets');
    });

    Route::prefix('/profile')->name('profile.')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('edit');
        Route::put('/', [ProfileController::class, 'update'])->name('update');
    });

    Route::prefix('/utilities')->name('utilities.')->group(function () {
        Route::view('/contact', 'utilities.contact')->name('contact');
        Route::view('/invoice', 'utilities.invoice')->name('invoice');
        Route::view('/subscribe', 'utilities.subscribe')->name('subscribe');
    });

    Route::view('/credits', 'credits')->name('credits');
    // #endregion pages
});
