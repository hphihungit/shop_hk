<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;

class FacebookController extends Controller
{
    public function facebookpage(Request $request)
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookredirect(Request $request)
    {
        $user = Socialite::driver('facebook')->user();
        $exitstingUser = User::where('email', $user->email)->first();

        if ($exitstingUser) {
            auth()->login($exitstingUser, true);

            return redirect('/');
        } else {

            $newUser = User::create([
                'email' => $user->email, 
                'name' => $user->name,
                'password' => encrypt('123456')
            ]);

            auth()->login($newUser, true);

            return redirect('/');
        }
    }
}
