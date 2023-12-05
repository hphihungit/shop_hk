<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;

class FacebookController extends Controller
{
    public function facebookpage() {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookredirect() {
        try {
            $user = Socialite::driver('facebook')->user();
        } catch (Exception $err) {
            dd($err->getMessage());
        }
    }
}
