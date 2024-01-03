<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;

class LoginFBController extends Controller
{
    public function redirect() {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback() {
        
    }
}
