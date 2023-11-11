<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Menu\MenuService;

class MainController extends Controller
{

    protected $menu;
    protected $product;
    protected $slider;

    public function __construct(MenuService $menu, ProductService $product, SliderService $slider) {
        $this->menu = $menu;
        $this->product = $product;
        $this->slider = $slider;
    }

    public function indexUser() {
        return view('main', [
            'title' => 'Shop HK',
            'sliders' => $this->slider->show(),
            'menus' => $this->menu->show(),
            'products' => $this->product->get()
        ]);
    }

    public function indexAdmin()
    {
        return view('admin.main', [
            'title' => 'Trang quản trị Admin'
        ]);
    }

}
