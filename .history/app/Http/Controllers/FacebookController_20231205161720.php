<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;

class FacebookController extends Controller
{
    public function facebookpage()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookredirect()
    {
            $user = Socialite::driver('facebook')->user();

            $exitstingUser = User::where('email', $user->email)->first();

            if ($exitstingUser) {
                auth()->login($exitstingUser, true);

                return redirect('/');

            } else {

                $newUser = User::updateOrCreate(['email' => $user->email], [
                    'name' => $user->name,
                    'facebook_id' => $user->id,
                    // 'password' => encrypt('123456')
                ]);

                Auth::login($newUser);

                return redirect('/');
            }
    }
}
