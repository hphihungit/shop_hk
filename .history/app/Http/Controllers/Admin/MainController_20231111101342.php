<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Menu\MenuService;

class MainController extends Controller
{
    public function indexAdmin()
    {
        return view('admin.main', [
            'title' => 'Trang quản trị Admin'
        ]);
    }

    public function indexUser() {
        return view('main', [
            'title' => 'Shop HK',
        ]);
    }
}
