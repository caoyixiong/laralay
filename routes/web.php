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

Route::get('demo', 'DemoController@index');
Route::prefix('demo')->group(function () {
    Route::get('main', 'DemoController@main');
    Route::get('welcome_1', 'DemoController@welcome_1');
    Route::get('welcome_2', 'DemoController@welcome_2');
    Route::get('menu', 'DemoController@menu');
    Route::get('setting', 'DemoController@setting');
    Route::get('table', 'DemoController@table');
    Route::get('form', 'DemoController@form');
    Route::get('form_step', 'DemoController@form_step');
    Route::get('login_1', 'DemoController@login_1');
    Route::get('login_2', 'DemoController@login_2');
    Route::get('page_404', 'DemoController@page_404');
    Route::get('button', 'DemoController@button');
    Route::get('layer', 'DemoController@layer');
    Route::get('icon', 'DemoController@icon');
    Route::get('icon_picker', 'DemoController@icon_picker');
    Route::get('color_select', 'DemoController@color_select');
    Route::get('table_select', 'DemoController@table_select');
    Route::get('upload', 'DemoController@upload');
    Route::get('editor', 'DemoController@editor');
    Route::get('user_setting', 'DemoController@user_setting');
    Route::get('user_password', 'DemoController@user_password');
});
