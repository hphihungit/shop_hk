<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use GrahamCampbell\ResultType\Success;
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
            'phone_number' => 'required|numeric|regex:/^[0-9]+$/'
        ]);
        
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['phone_number'] = $request->phone_number;
        $user = User::create($data);
        
        if (!$user) {
            return redirect('admin/users/register')->with('error', 'Đăng Kí Thất Bại, Vui Lòng Thử Lại');
        }
        return redirect('admin/users/login');
    }
}
