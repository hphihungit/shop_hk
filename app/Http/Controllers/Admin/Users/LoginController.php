<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.users.login', [
            'title' => 'Đăng nhập hệ thống'
        ]);
    }

    public function ressetPassword()
    {
        return view('admin.users.resetpassword');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email'    => 'required|email:filter',
            'password' => 'required'
        ]);

        $credentials = [
            'email'    => $request->input('email'),
            'password' => $request->input('password')
        ];

        if (Auth::attempt($credentials, $request->input('remember'))) {
            if (!Auth::user()) {
                return redirect()->route('login');
            }

            // Remove unnecessary semicolons after if conditions
            if (Auth::user()->role === '1') {
                return redirect()->route('admin');
            } elseif (Auth::user()->role === '2') {
                return redirect()->route('home');
            }
        }

        Session::flash('error', 'Email hoặc Password không đúng');
        return redirect()->back();
    }
}
