<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();


Route::group([
    'prefix' => 'guest'
], function () {
    Route::get('/', function() {
        return view('guest.home');
    })->name('guest.index');

    Route::get('/signup', function() {
        return view('guest.signup');
    })->name('guest.signup');

    Route::get('/faq', function() {
        return view('guest.faq');
    })->name('guest.faq');
});

Route::group([
    'middleware' => 'auth',
    'prefix' => 'viewer'
], function () {
    Route::get('/', function() {
        return view('viewer.home');
    })->name('viewer.home');

    Route::get('/profile', function() {
        return view('viewer.profile');
    })->name('viewer.profile');

    Route::get('/watch', function() {
        return view('viewer.watch');
    })->name('viewer.watch');

    Route::get('/channels', function() {
        return view('viewer.channels');
    })->name('viewer.channels');

    Route::get('/faq', function() {
        return view('viewer.faq');
    })->name('viewer.faq');
});

Route::group([
    'middleware' => 'auth',
    'prefix' => 'creator'
], function () {
    Route::get('/', function() {
        return view('creator.home');
    })->name('creator.home');

    Route::get('/videos', function() {
        return view('creator.videos');
    })->name('creator.videos');
});

Route::get('/', function () {
    return redirect()->route('guest.index');
});
