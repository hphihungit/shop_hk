<?php

namespace App\Http\Services\Account;

use App\Models\User;
use Illuminate\Support\Facades\Session;

class AccountService
{
    public function getAccounts()
    {
        return User::orderBy('id', 'asc')->paginate(20);
    }
    public function delete($request)
    {
        $user = User::where('id', $request->input('id'))->first();

        if ($user) {
            $user->delete();
            return true;
        }

        return false;
    }
    public function update($request, $user): bool
    {


        $user->name = (string)$request->input('name');
        $user->phone_number = (string)$request->input('phone_number');
        $user->email = (string)$request->input('email');
        $user->role = (string)$request->input('role');
        $user->password = (string)$request->input('password');
        $user->save();

        Session::flash('success', 'Cập nhật thành công Danh mục');
        return true;
    }
}
