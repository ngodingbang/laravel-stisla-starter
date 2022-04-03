<?php

use App\Http\Controllers\ProfileController;
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

Route::middleware('auth', 'verified', UseLayoutDefault::class)->group(function () {
    Route::prefix('/dashboard')->name('dashboard.')->group(function () {
        Route::view('/general', 'dashboard.general')->name('general');
        Route::view('/ecommerce', 'dashboard.ecommerce')->name('ecommerce');
    });

    #region starter
    Route::prefix('/layout')->name('layout.')->group(function () {
        Route::view('/default', 'layout.default')->name('default');
        Route::view('/transparent', 'layout.transparent')->name('transparent')->middleware(UseLayoutTransparent::class);
        Route::view('/top-navigation', 'layout.top-navigation')->name('top-navigation')->middleware(UseLayoutTopNavigation::class);
    });

    Route::view('/blank-page', 'blank-page')->name('blank-page');
    #endregion starter

    #region pages
    Route::prefix('/auth-page')->name('auth-page.')->group(function () {
        Route::view('/forgot-password', 'auth.forgot-password')->name('forgot-password');
        Route::view('/login', 'auth.login')->name('login');
        Route::view('/login-2', 'auth.login-2')->name('login-2');
        Route::view('/register', 'auth.register')->name('register');
        Route::view('/reset-password/{token}', 'auth.reset-password', ['request' => request()])->name('reset-password');
    });

    Route::prefix('/errors')->name('errors.')->group(function () {
        Route::get('/401', function () { abort(Response::HTTP_UNAUTHORIZED); })->name('401');
        Route::get('/403', function () { abort(Response::HTTP_FORBIDDEN); })->name('403');
        Route::get('/404', function () { abort(Response::HTTP_NOT_FOUND); })->name('404');
        Route::get('/419', function () { abort(419); })->name('419');
        Route::get('/429', function () { abort(Response::HTTP_TOO_MANY_REQUESTS); })->name('429');
        Route::get('/500', function () { abort(Response::HTTP_INTERNAL_SERVER_ERROR); })->name('500');
        Route::get('/503', function () { abort(Response::HTTP_SERVICE_UNAVAILABLE); })->name('503');
    });

    Route::prefix('/features')->name('features.')->group(function () {
        Route::view('/activities', 'features.activities')->name('activities');
        Route::view('/post-create', 'features.post-create')->name('post-create');
        Route::view('/posts', 'features.posts')->name('posts');
        Route::view('/settings', 'features.settings')->name('settings');
        Route::view('/setting-detail', 'features.setting-detail')->name('setting-detail');
        Route::view('/tickets', 'features.tickets')->name('tickets');
    });

    Route::prefix('/profile')->name('profile.')->controller(ProfileController::class)->group(function () {
        Route::get('/', 'edit')->name('edit');
        Route::put('/', 'update')->name('update');
    });

    Route::prefix('/utilities')->name('utilities.')->group(function () {
        Route::view('/contact', 'utilities.contact')->name('contact');
        Route::view('/invoice', 'utilities.invoice')->name('invoice');
        Route::view('/subscribe', 'utilities.subscribe')->name('subscribe');
    });

    Route::view('/credits', 'credits')->name('credits');
    #endregion pages
});
