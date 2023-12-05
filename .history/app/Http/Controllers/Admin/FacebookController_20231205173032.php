<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class FacebookController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function handleGoogleCallback()
    {
        try {
            // ng dung click vao gg
            $user = Socialite::driver('facebook')->user();
            // tim kiem tk da có trong database chưa(google_id)
            $finduser = User::where('facebook_id', $user->facebook_id)->first();

            if ($finduser) {
                /// nếu có thì login vào lun
                Auth::login($finduser);
                return redirect()->intended('/');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'phone_number' => $user->phone_number,
                    'facebook_id' => $user->google_id,
                    'password' => encrypt('123456') // trên 8 ký tự
                ]);
                // login vào với acc mới
                Auth::login($newUser);

                return redirect()->intended('dashboard');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
