<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function create() {
        return view('admin.menus.add', [
            'title' => 'Thêm Danh Mục'
        ]);
    }
}
