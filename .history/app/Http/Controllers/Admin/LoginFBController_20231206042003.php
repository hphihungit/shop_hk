<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginFBController extends Controller
{
    public function redirect() {
        return Socialite::driver('google')->redirect();
    }
}
