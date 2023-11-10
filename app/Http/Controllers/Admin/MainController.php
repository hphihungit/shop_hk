<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Menu\MenuService;
use App\Http\Services\Slider\SliderService;
use App\Http\Services\Product\ProductServi;

class MainController extends Controller
{
    protected $slider;
    protected $menu;
    protected $product;

    public function __construct(MenuService $menu, SliderService $slider, ProductServi  $product)
    {
        $this->menu = $menu;
        $this->slider = $slider;
        $this->product = $product;
    }
    public function indexAdmin()
    {
        return view('admin.main', [
            'title' => 'Trang quản trị Admin'
        ]);
    }
    public function indexUser()
    {
        return view('main', [
            'title' => 'Trang quản trị Admin',
            'menus' => $this->menu->show(),
            'sliders' => $this->slider->show(),
            'products' => $this->product->get()
        ]);
    }
}
