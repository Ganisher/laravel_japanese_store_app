<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/backend')->name('backend.')->namespace('\App\Http\Controllers\Backend')->group(function () {
    Route::namespace('Auth')->group(function () {
        Route::get('/login', 'LoginController@showLoginForm')->name('login');
        Route::post('/login', 'LoginController@login');
        Route::post('/logout', 'LoginController@logout')->name('logout');
    });
    Route::group(['middleware' => ['auth:backend']], function () {
        Route::get('/', 'HomeController@index');
    });
});

Route::prefix('/')->name('frontend.')->group(function () {

});
