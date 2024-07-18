<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
});

Route::middleware('guest')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/auth/google', 'google')->name('google');
        Route::get('/auth/twitch', 'twitch')->name('twitch');
        Route::get('/auth/google/callback', 'googleCallback')->name('googleCallback');
        Route::get('/auth/twitch/callback', 'twitchCallback')->name('twitchCallback');
        Route::get('/login','index')->name('login');
    });
});
