<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
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
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        
        if (!$user) {
            return redirect('admin/users/register')->with('error', 'Đăng Kí Thất Bại, Vui Lòng Thử Lại');
        }
        return redirect('admin/users/login')->with('success', 'Đăng Kí Thành Công');

        Session::flash('error', 'Email hoặc Password không đúng');
        return redirect()->back();
    }
}
