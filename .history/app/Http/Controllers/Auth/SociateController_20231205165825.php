<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SociateController extends Controller
{
    public function redirectToProvider() {
        return Socialite::driver('facebook')->redirect();
    }
}
