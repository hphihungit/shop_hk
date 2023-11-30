<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\User\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected UserService $userService;

    public function __construct($userService)
    {   
        $this->userService = $userService;
    }

    public function index() {
        return view('admin.users.list', [
            'title' => 'Danh Sách Sản Phẩm',
            'products' => $this->userService->get()
        ])
    }
}
