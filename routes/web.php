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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

// without pulling data from API - static pages
Route::get('/guest', function() { return view('guest.home'); });
Route::get('/guest/signup', function() { return view('guest.signup'); });
Route::get('/guest/pricing', function() { return view('guest.pricing'); });
Route::get('/guest/faq', function() { return view('guest.faq'); });
Route::get('/contentcreator', function() { return view('contentcreator.home'); });
Route::get('/contentcreator/videos', function() { return view('contentcreator.videos'); });
Route::get('/viewer', function() { return view('viewer.home'); });
Route::get('/viewer/profile', function() { return view('viewer.profile'); });
Route::get('/viewer/watch', function() { return view('viewer.watch'); });
Route::get('/viewer/channels', function() { return view('viewer.channels'); });
Route::get('/viewer/billing', function() { return view('viewer.billing'); });
Route::get('/viewer/faq', function() { return view('viewer.faq'); });
