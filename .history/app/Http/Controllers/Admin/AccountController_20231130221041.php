<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    

    public function show() {
        return view('admin.accounts.list', [
            'title' => 'Danh Sách User',
        ]);
    }
}
