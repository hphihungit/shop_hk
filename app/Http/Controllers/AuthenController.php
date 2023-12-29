<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthenController extends Controller
{
    public function checkUser()
    {
        if (!Auth::user()) {
            return redirect()->route('login');
        }
        if (Auth::user()->role === '1'); {
            return redirect()->route('admin');
        }
        if (Auth::user()->role === '2'); {
            return redirect()->route('home');
        }
    }
    public function logout()
    {
        // Clear user authentication session
        Auth::logout();

        // Clear product cart session
        Session::forget('carts');
        return redirect('/admin/users/login');
    }
}
