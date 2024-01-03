<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Http\Request;

class LoginFBController extends Controller
{
    public function redirect() {
        return Socialite::driver('facebook')->redirect();
    }

    // public function callback() {
    //     try {
    //         // ng dung click vao gg
    //         $user = Socialite::driver('facebook')->user();
    //         // tim kiem tk da có trong database chưa(google_id)
    //         $finduser = User::where('email', $user->email)->first();

    //         if ($finduser) {
    //             /// nếu có thì login vào lun
    //             Auth::login($finduser);
    //             return redirect()->intended('/');
    //         } else {
    //             $newUser = User::create([
    //                 'name' => $user->name,
    //                 'email' => $user->email,
    //                 'phone_number' => '',
    //                 'password' => encrypt('123456dummy') // trên 8 ký tự
    //             ]);
    //             // login vào với acc mới
    //             Auth::login($newUser);

    //             return redirect()->intended('/');
    //         }
    //     } catch (Exception $e) {
    //         dd($e->getMessage());
    //     }
    // }
}
