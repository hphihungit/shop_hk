<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class SociateController extends Controller
{
    public function redirectToProvider() {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback() {
        $user = Socialite::driver('facebook')->user();
        // Tìm kiếm người dùng đã tồn tại chưa
        $exitstingUser = User::where('email', $user->email)->first();

        if ($exitstingUser) {
            // Đăng nhập
            auth()->login($exitstingUser, true);
            return redirect()->intended('home')
        } else {
            //Tạo người dùng mới
        }
    }
}
