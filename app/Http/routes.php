<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@showWelcome');

Route::get('interior', function () {
    return view('interior');
});

Route::get('jewels', function () {
    return view('jewels');
});

Route::get('fashion', function () {
    return view('fashion');
});

Route::get('demo', function () {
    return view('demo');
});

Route::get('me', function () {
    return view('me');
});