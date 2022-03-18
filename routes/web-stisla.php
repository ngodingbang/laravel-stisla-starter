<?php

use App\Http\Controllers\ProfileController;
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

Route::middleware('auth', 'verified')->group(function () {
    Route::name('dashboard.')->group(function () {
        Route::view('/dashboard-general', 'dashboard.general')->name('general');
        Route::view('/dashboard-ecommerce', 'dashboard.ecommerce')->name('ecommerce');
    });

    Route::name('layout.')->group(function () {
        Route::view('/layout-default', 'layout.default')->name('default');
        Route::view('/layout-transparent', 'layout.transparent')->name('transparent');
        Route::view('/layout-top-navigation', 'layout.top-navigation')->name('top-navigation');
    });

    Route::name('features.')->group(function () {
        Route::view('/features-activities', 'features.activities')->name('activities');
        Route::view('/features-post-create', 'features.post-create')->name('post-create');
        Route::view('/features-posts', 'features.posts')->name('posts');
        Route::view('/features-profile', 'features.profile')->name('profile');
        Route::view('/features-settings', 'features.settings')->name('settings');
        Route::view('/features-setting-detail', 'features.setting-detail')->name('setting-detail');
        Route::view('/features-tickets', 'features.tickets')->name('tickets');
    });

    Route::prefix('/profile')->name('profile.')->controller(ProfileController::class)->group(function () {
        Route::get('/', 'edit')->name('edit');
        Route::put('/', 'update')->name('update');
    });
});
