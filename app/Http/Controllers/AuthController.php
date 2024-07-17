<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;

class AuthController
{
public function google()
    {
        return Socialite::driver('google')->redirect();
    }

    public function twitch()
    {
        return Socialite::driver('twitch')->redirect();
    }

    public function googleCallback()
    {
        $user = Socialite::driver('google')->user();

        dd($user);
    }

    public function twitchCallback()
    {
        $user = Socialite::driver('twitch')->user();

        dd($user);
    }
}
