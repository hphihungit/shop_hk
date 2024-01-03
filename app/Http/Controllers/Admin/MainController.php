<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Menu\MenuService;
use App\Http\Services\Slider\SliderService;
use App\Http\Services\Product\ProductService;
use App\Http\Services\Banner\BannerService;
use App\Http\Services\Account\AccountService;
use App\Models\User;

class MainController extends Controller
{
    protected $slider;
    protected $menu;
    protected $product;
    protected $banner;
    protected $user;

    public function __construct(
        MenuService $menu,
        SliderService $slider,
        ProductService  $product,
        BannerService $banner,
        AccountService $user
    ) {
        $this->menu = $menu;
        $this->slider = $slider;
        $this->product = $product;
        $this->banner = $banner;
        $this->user = $user;
    }
    public function indexAdmin()
    {
        return view('admin.home', [
            'title' => 'Coffee shop'
        ]);
    }

    public function indexUser()
    {
        return view('home', [
            'title' => 'Coffee shop',
            'menus' => $this->menu->show(),
            'sliders' => $this->slider->show(),
            'products' => $this->product->get(),
            'banners' => $this->banner->show(),
            'user' => $this->user->show(),
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
