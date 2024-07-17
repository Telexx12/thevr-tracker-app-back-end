<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/auth/google', 'google');
        Route::get('/auth/twitch', 'twitch');
        Route::get('auth/google/callback', 'googleCallback');
        Route::get('auth/twitch/callback', 'twitchCallback');
    });
});
