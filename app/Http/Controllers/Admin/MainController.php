<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Menu\MenuService;
use App\Http\Services\Slider\SliderService;
use App\Http\Services\Product\ProductService;
use App\Http\Services\Banner\BannerService;

class MainController extends Controller
{
    protected $slider;
    protected $menu;
    protected $product;
    protected $banner;

    public function __construct(MenuService $menu, SliderService $slider, ProductService  $product, BannerService $banner)
    {
        $this->menu = $menu;
        $this->slider = $slider;
        $this->product = $product;
        $this->banner = $banner;
    }
    public function indexAdmin()
    {
        return view('admin.main', [
            'title' => 'Trang quản trị Admin'
        ]);
    }
    public function indexUser()
    {
        return view('home', [
            'title' => 'Trang quản trị Admin',
            'menus' => $this->menu->show(),
            'sliders' => $this->slider->show(),
            'products' => $this->product->get(),
            'banners' => $this->banner->show()
        ]);
    }
    public function loadProduct(Request $request)
    {
        $page = $request->input('page', 0);
        $result = $this->product->get($page);
        if (count($result) != 0) {
            $html = view('products.list', ['products' => $result])->render();

            return response()->json(['html' => $html]);
        }

        return response()->json(['html' => '']);
    }
}
