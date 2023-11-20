<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function index() {
        return view('admin.users.register', [
            'title' => 'Đăng Ký'
        ]);
    }

    public function store(Request $request) {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email:filter',
            'password' => 'required',
        ]);
        
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash:make($request->password);

        Session::flash('error', 'Email hoặc Password không đúng');
        return redirect()->back();
    }
}
