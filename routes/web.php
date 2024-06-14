<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/google', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/auth/twitch', function () {
    return Socialite::driver('twitch')->redirect();
});

Route::get('auth/google/callback', function () {
    $user = Socialite::driver('google')->user();

    dd($user);
});

Route::get('auth/twitch/callback', function () {
    $user = Socialite::driver('twitch')->user();

    dd($user);
});
