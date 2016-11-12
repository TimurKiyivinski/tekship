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

Route::get('test', function() { return view('samples.test'); });
Route::get('page1', function() { return view('samples.page1'); });
Route::get('page2', function() { return view('samples.page2'); });
Route::get('page3', function() { return view('samples.page3'); });
Route::get('page4', function() { return view('samples.page4'); });
