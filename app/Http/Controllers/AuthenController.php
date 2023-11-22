<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
