<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Menu\MenuService;

class MainController extends Controller
{
    protected $slider;
    protected $menu;

    public function __construct(MenuService $menu)
    {
        $this->menu = $menu;
    }
    public function indexAdmin()
    {
        return view('admin.main', [
            'title' => 'Trang quản trị Admin'
        ]);
    }
}
